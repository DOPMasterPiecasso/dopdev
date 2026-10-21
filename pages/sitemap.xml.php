<?php

/**
 * Dynamic XML Sitemap generator.
 * Automatically serves static pages and published blog posts with canonical URLs.
 */

if (!defined('ROOT')) {
    define('ROOT', dirname(__DIR__));
}

// Ensure database and blog functions are loaded
if (!function_exists('db_all')) {
    require_once ROOT . '/system/db.php';
}
if (!function_exists('blog_list')) {
    require_once ROOT . '/system/blog.php';
}

$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443) ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'] ?? 'dopdev.com';

// Normalize host for production domain
if (strpos($host, 'localhost') === false && strpos($host, '127.0.0.1') === false) {
    $baseUrl = 'https://dopdev.com';
} else {
    $baseUrl = $scheme . '://' . $host;
}

$today = date('Y-m-d');

// Core static pages with priority and change frequency
$pages = [
    [
        'loc'        => $baseUrl . '/',
        'lastmod'    => $today,
        'changefreq' => 'weekly',
        'priority'   => '1.0',
    ],
    [
        'loc'        => $baseUrl . '/case-studies',
        'lastmod'    => $today,
        'changefreq' => 'weekly',
        'priority'   => '0.9',
    ],
    [
        'loc'        => $baseUrl . '/about',
        'lastmod'    => $today,
        'changefreq' => 'monthly',
        'priority'   => '0.8',
    ],
    [
        'loc'        => $baseUrl . '/feature',
        'lastmod'    => $today,
        'changefreq' => 'monthly',
        'priority'   => '0.8',
    ],
    [
        'loc'        => $baseUrl . '/blog',
        'lastmod'    => $today,
        'changefreq' => 'daily',
        'priority'   => '0.9',
    ],
    [
        'loc'        => $baseUrl . '/contact',
        'lastmod'    => $today,
        'changefreq' => 'monthly',
        'priority'   => '0.7',
    ],
    [
        'loc'        => $baseUrl . '/faqs',
        'lastmod'    => $today,
        'changefreq' => 'monthly',
        'priority'   => '0.6',
    ],
];

// Service detail pages
$services = ['landing-page', 'company-profile', 'booking-system', 'custom-system'];
foreach ($services as $svc) {
    $pages[] = [
        'loc'        => $baseUrl . '/service-detail/' . $svc,
        'lastmod'    => $today,
        'changefreq' => 'monthly',
        'priority'   => '0.8',
    ];
}

// Case study detail pages
$caseStudies = ['barbershop', 'clinic', 'salon', 'fitness'];
foreach ($caseStudies as $case) {
    $pages[] = [
        'loc'        => $baseUrl . '/case-study/' . $case,
        'lastmod'    => $today,
        'changefreq' => 'monthly',
        'priority'   => '0.8',
    ];
}

// Query published blog posts from SQLite database
try {
    $posts = db_all(
        "SELECT slug, COALESCE(updated_at, published_at, created_at) AS modified_at 
         FROM blog_posts 
         WHERE status = 'published' 
         ORDER BY id DESC"
    );

    foreach ($posts as $post) {
        $lastmod = !empty($post['modified_at']) ? substr($post['modified_at'], 0, 10) : $today;
        $pages[] = [
            'loc'        => $baseUrl . '/blog-details/' . rawurlencode($post['slug']),
            'lastmod'    => $lastmod,
            'changefreq' => 'weekly',
            'priority'   => '0.7',
        ];
    }
} catch (\Throwable $e) {
    // Graceful fallback if database unavailable
}

header('Content-Type: application/xml; charset=utf-8');
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($pages as $p): ?>
  <url>
    <loc><?= htmlspecialchars($p['loc'], ENT_XML1, 'UTF-8') ?></loc>
    <lastmod><?= htmlspecialchars($p['lastmod'], ENT_XML1, 'UTF-8') ?></lastmod>
    <changefreq><?= htmlspecialchars($p['changefreq'], ENT_XML1, 'UTF-8') ?></changefreq>
    <priority><?= htmlspecialchars($p['priority'], ENT_XML1, 'UTF-8') ?></priority>
  </url>
<?php endforeach; ?>
</urlset>
