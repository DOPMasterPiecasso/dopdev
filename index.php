<?php

// Router untuk PHP built-in server (docroot = public/)
// Usage: php -S localhost:8080 -t public
//   atau: php -S localhost:8080 -t public index.php  (pakai file ini sbg router script)
if (PHP_SAPI === 'cli-server' && !empty($_SERVER['SCRIPT_FILENAME']) && realpath($_SERVER['SCRIPT_FILENAME']) === __FILE__) {
	$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

	// Serve file statis dari public/ langsung
	if ($uri !== '/' && is_file(__DIR__ . '/public' . $uri)) {
		return false;
	}
}

// Initial setup

define('ROOT', __DIR__);
define('MODE_DEV', '%MODE%' === 'development');

// Pastikan path relatif (pages/, partials/, vendor/ ...) selalu resolve dari root
chdir(ROOT);

function require_existing(string $path) {
	file_exists($path) && require_once($path);
}

require_existing('vendor/autoload.php');
require_existing('configs/env.php');
require_existing('system/vite.php');

try {
	require_existing('configs/routes.php');
} catch (\Throwable $th) {
	die('Error: ' . $th->getMessage());
}
