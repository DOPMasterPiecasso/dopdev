<?php

/**
 * Vite Helper - Laravel-style Vite integration for PHP
 */

function vite_assets($entry = 'src/js/app.js') {
    $port = getenv('VITE_PORT') ?: 5177;

    // Detect client-accessible host (supports localhost, LAN IP, custom domains, IPv6)
    $rawHost = $_SERVER['HTTP_HOST'] ?? ($_SERVER['SERVER_NAME'] ?? 'localhost');
    if (filter_var($rawHost, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) {
        $host = "[{$rawHost}]";
    } else {
        $parsedHost = parse_url('http://' . $rawHost, PHP_URL_HOST);
        $host = !empty($parsedHost) ? $parsedHost : explode(':', $rawHost)[0];
    }

    $protocol = getenv('VITE_PROTOCOL') ?: ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http');
    $devServerUrl = getenv('VITE_DEV_SERVER_URL') ?: "{$protocol}://{$host}:{$port}";
    $manifestPath = __DIR__ . '/../public/.vite/manifest.json';
    
    // Check if Vite dev server is running (check 127.0.0.1 first, then devServerUrl)
    $isDevServer = false;
    $checkUrls = ["http://127.0.0.1:{$port}/@vite/client"];
    $clientCheckUrl = rtrim($devServerUrl, '/') . '/@vite/client';
    if (!in_array($clientCheckUrl, $checkUrls, true)) {
        $checkUrls[] = $clientCheckUrl;
    }

    if (function_exists('curl_init')) {
        foreach ($checkUrls as $checkUrl) {
            $ch = curl_init($checkUrl);
            curl_setopt($ch, CURLOPT_NOBODY, false);
            curl_setopt($ch, CURLOPT_TIMEOUT_MS, 300);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HEADER, true);
            $response = curl_exec($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);

            if ($httpCode === 200) {
                $isDevServer = true;
                break;
            }
        }
    } elseif (function_exists('fsockopen')) {
        $fp = @fsockopen('127.0.0.1', (int)$port, $errno, $errstr, 0.3);
        if ($fp) {
            $isDevServer = true;
            fclose($fp);
        }
    }
    
    if ($isDevServer) {
        // Development mode - load from Vite dev server
        echo '<script type="module" src="' . $devServerUrl . '/@vite/client"></script>';
        echo '<script type="module" src="' . $devServerUrl . '/' . $entry . '"></script>';
    } else {
        // Production mode - load from manifest
        if (!file_exists($manifestPath)) {
            echo '<!-- Vite manifest not found. Run: npm run build -->';
            return;
        }
        
        $manifest = json_decode(file_get_contents($manifestPath), true);
        
        if (isset($manifest[$entry])) {
            $file = '/' . ltrim($manifest[$entry]['file'], '/');
            $css = $manifest[$entry]['css'] ?? [];
            
            // Load CSS
            foreach ($css as $cssFile) {
                echo '<link rel="stylesheet" href="/' . ltrim($cssFile, '/') . '">';
            }
            
            // Load JS
            echo '<script type="module" src="' . $file . '"></script>';
        }
    }
}
