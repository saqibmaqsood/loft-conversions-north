<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'error' => 'Method not allowed.']);
    exit;
}

$anotherLevelDir = dirname(__DIR__, 2) . '/Another Level Loft Conversion';
require_once $anotherLevelDir . '/panel/includes/db.php';
require_once $anotherLevelDir . '/panel/includes/mailer.php';
require_once $anotherLevelDir . '/panel/includes/sites.php';

$input = json_decode(file_get_contents('php://input'), true);
if (!$input || !is_array($input)) {
    $input = $_POST;
}

// Always route to Site 2 (Loft Conversions North)
$siteId = 2;

$name       = trim($input['name'] ?? '');
$email      = trim($input['email'] ?? '');
$phone      = trim($input['phone'] ?? '');
$subject    = trim($input['subject'] ?? 'General Inquiry');
$message    = trim($input['message'] ?? '');
$sourcePage = trim($input['page_url'] ?? $_SERVER['HTTP_REFERER'] ?? '/contact.php');

if (empty($name) || (empty($email) && empty($phone)) || empty($message)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'error' => 'Name, contact info, and message are required.']);
    exit;
}

$ipAddress  = getClientIP();
$userAgent  = $_SERVER['HTTP_USER_AGENT'] ?? '';
$deviceType = getDeviceType($userAgent);

$db = getDB();

// Deduplication
$dedup = $db->prepare("
    SELECT id FROM contacts
    WHERE (email = ? OR phone = ?) AND site_id = ? AND created_at > datetime('now', '-3 minutes')
    LIMIT 1
");
$dedup->execute([$email, $phone, $siteId]);
if ($dedup->fetch()) {
    echo json_encode([
        'success' => true,
        'message' => 'Thank you! We have already received your message for Loft Conversions North and will reply shortly.'
    ]);
    exit;
}

try {
    $stmt = $db->prepare("
        INSERT INTO contacts (
            site_id, name, email, phone, subject, message,
            status, source_page, ip_address, device_type, created_at
        ) VALUES (
            ?, ?, ?, ?, ?, ?,
            'New', ?, ?, ?, datetime('now')
        )
    ");

    $stmt->execute([
        $siteId, $name, $email, $phone, $subject, $message,
        $sourcePage, $ipAddress, $deviceType
    ]);

    $contactId = (int)$db->lastInsertId();

    // Log to events_tracking table
    try {
        $eventStmt = $db->prepare("
            INSERT INTO events_tracking (
                site_id, event_type, event_target, source_page,
                ip_address, device_type, browser, created_at
            ) VALUES (
                ?, 'contact_submitted', ?, ?,
                ?, ?, ?, datetime('now')
            )
        ");
        $eventStmt->execute([
            $siteId,
            "Contact: {$name} (" . ($subject ?: 'General Query') . ")",
            $sourcePage,
            $ipAddress,
            $deviceType,
            getBrowserName($userAgent)
        ]);
    } catch (Exception $e) {}

    $contactData = [
        'id'          => $contactId,
        'site_id'     => $siteId,
        'name'        => $name,
        'email'       => $email,
        'phone'       => $phone,
        'subject'     => $subject,
        'message'     => $message,
        'source_page' => $sourcePage,
        'ip_address'  => $ipAddress,
        'created_at'  => date('Y-m-d H:i:s')
    ];

    try {
        if (!empty($email)) {
            sendTemplatedEmail('contact_confirmation', $email, $name, $contactData);
        }
        $adminAlertEmail = getSetting('admin_notification_email', 'info@loftconversionsnorth.co.uk');
        sendTemplatedEmail('contact_admin_alert', $adminAlertEmail, 'Enquiry Dispatch', $contactData);
    } catch (Exception $e) {
        error_log("Contact email dispatch: " . $e->getMessage());
    }

    echo json_encode([
        'success' => true,
        'message' => 'Thank you! Your message has been sent to our technical surveying team.',
        'site'    => 'Loft Conversions North'
    ]);
} catch (Exception $e) {
    error_log("Submit contact error: " . $e->getMessage());
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'error'   => 'Failed to deliver message. Please contact us directly at info@loftconversionsnorth.co.uk or call 0161 4100155.'
    ]);
}
