<?php
// Router untuk PHP built-in server (docroot = public/)
// Usage: php -S localhost:8080 -t public router.php

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Serve static files dari public/ langsung
if ($uri !== '/' && is_file(__DIR__ . '/public' . $uri)) {
	return false;
}

// Selain itu, route lewat aplikasi
require __DIR__ . '/index.php';
