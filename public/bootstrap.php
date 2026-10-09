<?php

// Bootstrap aplikasi — dipanggil dari public/index.php (docroot public/)
// atau dari index.php di root (docroot root / router script).

define('ROOT', dirname(__DIR__));
define('MODE_DEV', '%MODE%' === 'development');

// Path relatif (pages/, partials/, vendor/, ...) selalu resolve dari root proyek
chdir(ROOT);

function require_existing(string $path) {
	file_exists($path) && (require_once $path);
}

require_existing('vendor/autoload.php');
require_existing('configs/env.php');
require_existing('system/vite.php');

try {
	require_existing('configs/routes.php');
} catch (\Throwable $th) {
	die('Error: ' . $th->getMessage());
}
