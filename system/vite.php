<?php

/**
 * Vite Helper - Laravel-style Vite integration for PHP
 */

function vite_assets($entry = 'src/js/app.js') {
    $devServerUrl = 'http://localhost:5177';
    $manifestPath = __DIR__ . '/../public/.vite/manifest.json';
    
    // Check if Vite dev server is running (GET, karena Vite balas 404 untuk HEAD)
    $isDevServer = false;
    if (function_exists('curl_init')) {
        $ch = curl_init($devServerUrl . '/@vite/client');
        curl_setopt($ch, CURLOPT_NOBODY, false);
        curl_setopt($ch, CURLOPT_TIMEOUT_MS, 300);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, true);
        $response = curl_exec($ch);
        $isDevServer = curl_getinfo($ch, CURLINFO_HTTP_CODE) == 200;
        curl_close($ch);
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
