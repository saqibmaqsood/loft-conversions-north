<?php
chdir(__DIR__);
set_include_path(__DIR__ . PATH_SEPARATOR . get_include_path());

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$file = __DIR__ . $uri;

// If a non-directory static asset or explicit file exists directly
if ($uri !== '/' && !is_dir($file) && file_exists($file)) {
    return false;
}

// Redirect panel requests to the shared operations dashboard on Another Level Loft Conversion
if ($uri === '/panel' || $uri === '/panel/' || strpos($uri, '/panel/') === 0) {
    $targetPath = preg_replace('#^/panel/?#i', '', $uri);
    $sub = !empty($targetPath) ? $targetPath : '';
    if (!empty($sub) && !str_ends_with($sub, '.php') && !str_contains($sub, '.')) {
        $sub .= '.php';
    }
    $targetFile = !empty($sub) ? $sub : '';
    $qs = !empty($_SERVER['QUERY_STRING']) ? '&' . $_SERVER['QUERY_STRING'] : '';
    $clientHost = !empty($_SERVER['HTTP_HOST']) ? explode(':', $_SERVER['HTTP_HOST'])[0] : 'localhost';
    if ($clientHost === '0.0.0.0') {
        $clientHost = 'localhost';
    }
    $redirectUrl = 'http://' . $clientHost . ':8000/panel/' . $targetFile . '?site=loft-conversions-north' . $qs;
    header('Location: ' . $redirectUrl);
    exit;
}

// If clean URL matches a .php file (e.g. /about -> about.php)
if ($uri !== '/' && file_exists($file . '.php')) {
    include $file . '.php';
    return true;
}

// If directory request has index.php
if (is_dir($file) && file_exists($file . '/index.php')) {
    include $file . '/index.php';
    return true;
}

// Default fallback to index.php
include __DIR__ . '/index.php';
return true;
