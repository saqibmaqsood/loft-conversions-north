<?php
declare(strict_types=1);

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    echo json_encode(["success" => false, "error" => "Method not allowed."]);
    exit;
}

$anotherLevelDir = dirname(__DIR__, 2) . "/Another Level Loft Conversion";
require_once $anotherLevelDir . "/panel/includes/db.php";
require_once $anotherLevelDir . "/panel/includes/mailer.php";

$input = json_decode(file_get_contents("php://input"), true);
if (!$input || !is_array($input)) {
    $input = $_POST;
}

$userMessage = trim((string)($input["message"] ?? ""));
$sessionId   = trim((string)($input["session_id"] ?? ""));
$sourcePage  = trim((string)($input["page"] ?? $_SERVER["HTTP_REFERER"] ?? "/"));
$history     = is_array($input["history"] ?? null) ? $input["history"] : [];
$siteId      = 2; // Loft Conversions North

if (empty($sessionId)) {
    $sessionId = "chat_lcn_" . bin2hex(random_bytes(8));
}

if ($userMessage === "") {
    echo json_encode(["success" => false, "error" => "Empty message received."]);
    exit;
}

$db = getDB();

$settStmt = $db->query("SELECT key, value FROM settings");
$settings = $settStmt->fetchAll(PDO::FETCH_KEY_PAIR);

$chatEnabled     = ($settings["ai_chat_enabled"] ?? "1") === "1";
$openAiKey       = trim((string)($settings["openai_api_key"] ?? ""));
$openAiModel     = trim((string)($settings["openai_model"] ?? "gpt-4o-mini"));
$rawBotName      = trim((string)($settings["ai_chat_name"] ?? "Alex — Loft Specialist"));
$cleanName       = preg_replace('/[—–\-].*$/u', '', $rawBotName);
$cleanName       = trim(preg_replace('/\s+/', ' ', (string)$cleanName));
$botFirstName    = !empty($cleanName) ? explode(' ', $cleanName)[0] : 'Alex';
$botName         = $rawBotName;
$notifySurveyor  = ($settings["ai_chat_lead_notify"] ?? "1") === "1";

if (!$chatEnabled) {
    echo json_encode([
        "success" => false,
        "reply" => "Live chat is temporarily offline. Please request a free survey using our online form or call 0161 4100155."
    ]);
    exit;
}

// Fallback rule-based responses if API key not present
function generateLocalReply(string $msg): string {
    $lower = strtolower($msg);
    if (strpos($lower, "cost") !== false || strpos($lower, "price") !== false || strpos($lower, "quote") !== false) {
        return "At Loft Conversions North, our turnkey conversions start from £24,000 for Velux/rooflight rooms, from £48,000 for terraced, semi-detached, and detached dormers, £55,000 for hip-to-gable, and £55,000 for wrap around conversions. All our figures include architectural calculations, building regulations sign-off, and guaranteed fixed pricing. Would you like to check your postcode for a free survey?";
    }
    if (strpos($lower, "planning") !== false || strpos($lower, "permitted") !== false) {
        return "Most residential loft conversions in Northern England fall under Permitted Development (up to 40m³ for terraces, 50m³ for semis and detached). If planning permission is required, our team handles the entire application on your behalf. What type of house do you have?";
    }
    if (strpos($lower, "time") !== false || strpos($lower, "long") !== false || strpos($lower, "week") !== false) {
        return "Typical builds take 6 to 10 weeks depending on property type and design (6–8 weeks for standard dormers, 6–10 weeks for detached, 8–10 weeks for wrap arounds). All heavy materials enter via our external scaffold hoist so your ground floor stays clean and undisturbed throughout construction.";
    }
    return "Thank you for reaching out to Loft Conversions North! We offer free home structural surveys across Greater Manchester, Lancashire, and Cheshire. Could I take your postcode and telephone number so our surveyor can check availability for you?";
}

$botReply = "";
if (empty($openAiKey)) {
    $botReply = generateLocalReply($userMessage);
} else {
    // OpenAI integration with Loft Conversions North prompt
    $systemPrompt = "You are {$botFirstName}, an expert Senior Loft Conversion Architect & Surveyor at Loft Conversions North (loftconversionsnorth.co.uk).
Phone: 0161 4100155. Coverage: Greater Manchester, Lancashire, Cheshire, Merseyside.
Pricing: Velux from £24k, Terraced, Semi & Detached from £48k (6-10 weeks on site), Hip-to-Gable from £55k, Wrap Around from £55k.
Tone: Knowledgeable, professional, warm, Northern British tone.
Goal: Provide helpful answers and invite visitor to schedule a free 45-min survey. Ask for name, phone, and postcode.";

    $messages = [["role" => "system", "content" => $systemPrompt]];
    foreach (array_slice($history, -6) as $h) {
        if (!empty($h["sender"]) && !empty($h["text"])) {
            $role = ($h["sender"] === "bot") ? "assistant" : "user";
            $messages[] = ["role" => $role, "content" => (string)$h["text"]];
        }
    }
    $messages[] = ["role" => "user", "content" => $userMessage];

    $payload = json_encode([
        "model" => $openAiModel,
        "messages" => $messages,
        "temperature" => 0.6,
        "max_tokens" => 350
    ]);

    $ch = curl_init("https://api.openai.com/v1/chat/completions");
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $payload,
        CURLOPT_HTTPHEADER => [
            "Content-Type: application/json",
            "Authorization: Bearer " . $openAiKey
        ],
        CURLOPT_TIMEOUT => 15
    ]);
    $res = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($httpCode === 200 && $res) {
        $json = json_decode($res, true);
        $botReply = trim((string)($json["choices"][0]["message"]["content"] ?? ""));
    }
    if (empty($botReply)) {
        $botReply = generateLocalReply($userMessage);
    }
}

// Log conversation into shared database
try {
    $cStmt = $db->prepare("SELECT id, transcript, message_count FROM chat_conversations WHERE session_id = ? AND site_id = ? LIMIT 1");
    $cStmt->execute([$sessionId, $siteId]);
    $existing = $cStmt->fetch(PDO::FETCH_ASSOC);

    $convLog = [];
    if ($existing && !empty($existing["transcript"])) {
        $convLog = json_decode($existing["transcript"], true) ?: [];
    }
    $convLog[] = ["sender" => "user", "text" => $userMessage, "time" => date("H:i")];
    $convLog[] = ["sender" => "bot", "text" => $botReply, "time" => date("H:i")];

    $msgCount = count($convLog);

    if ($existing) {
        $uStmt = $db->prepare("UPDATE chat_conversations SET transcript = ?, message_count = ?, updated_at = CURRENT_TIMESTAMP WHERE id = ?");
        $uStmt->execute([json_encode($convLog), $msgCount, $existing["id"]]);
    } else {
        $iStmt = $db->prepare("INSERT INTO chat_conversations (session_id, site_id, source_page, transcript, message_count) VALUES (?, ?, ?, ?, ?)");
        $iStmt->execute([$sessionId, $siteId, $sourcePage, json_encode($convLog), $msgCount]);
    }
} catch (Exception $e) {
    error_log("Chat log error: " . $e->getMessage());
}

echo json_encode([
    "success"    => true,
    "reply"      => $botReply,
    "session_id" => $sessionId,
    "bot_name"   => $botFirstName
]);
