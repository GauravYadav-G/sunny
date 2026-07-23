<?php
// Vercel Serverless Function Router for PHP
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Clean trailing slash
if ($requestUri !== '/' && substr($requestUri, -1) === '/') {
    $requestUri = rtrim($requestUri, '/');
}

// Default to index.php for root
if ($requestUri === '/' || $requestUri === '' || $requestUri === '/index') {
    require __DIR__ . '/../index.php';
    exit;
}

// Check if requested PHP file exists (e.g. /about or /about.php)
$targetFile = __DIR__ . '/..' . $requestUri;

if (file_exists($targetFile) && !is_dir($targetFile)) {
    require $targetFile;
    exit;
}

if (file_exists($targetFile . '.php')) {
    require $targetFile . '.php';
    exit;
}

// Fallback to index.php
require __DIR__ . '/../index.php';
