<?php

$dispatcher = FastRoute\simpleDispatcher(function (
	FastRoute\RouteCollector $r
) {
	$r->addRoute('GET', '/', function ($ROUTE_PARAMS) {
		include 'pages/index.php';
	});
	$r->addRoute('GET', '/about', function ($ROUTE_PARAMS) {
		include 'pages/about.php';
	});
	$r->addRoute('GET', '/blog-details', function ($ROUTE_PARAMS) {
		include 'pages/blog-details.php';
	});
	$r->addRoute('GET', '/blog-details/{slug}', function ($ROUTE_PARAMS) {
		$_GET['post'] = $ROUTE_PARAMS['slug'] ?? '';
		include 'pages/blog-details.php';
	});
	$r->addRoute('GET', '/blog', function ($ROUTE_PARAMS) {
		include 'pages/blog.php';
	});
	$r->addRoute('GET', '/case-studies', function ($ROUTE_PARAMS) {
		include 'pages/case-studies.php';
	});
	$r->addRoute('GET', '/case-study', function ($ROUTE_PARAMS) {
		include 'pages/case-study.php';
	});
	$r->addRoute('GET', '/case-study/{slug}', function ($ROUTE_PARAMS) {
		if (isset($ROUTE_PARAMS['slug'])) {
			$_GET['case'] = $ROUTE_PARAMS['slug'];
		}
		include 'pages/case-study.php';
	});
	$r->addRoute('GET', '/contact', function ($ROUTE_PARAMS) {
		include 'pages/contact.php';
	});
	$r->addRoute('GET', '/error-401', function ($ROUTE_PARAMS) {
		include 'pages/error-401.php';
	});
	$r->addRoute('GET', '/error-404', function ($ROUTE_PARAMS) {
		include 'pages/error-404.php';
	});
	$r->addRoute('GET', '/faqs', function ($ROUTE_PARAMS) {
		include 'pages/faqs.php';
	});
	$r->addRoute('GET', '/feature', function ($ROUTE_PARAMS) {
		include 'pages/feature.php';
	});
	$r->addRoute('GET', '/service-detail', function ($ROUTE_PARAMS) {
		include 'pages/service-detail.php';
	});
	$r->addRoute('GET', '/service-detail/{slug}', function ($ROUTE_PARAMS) {
		if (isset($ROUTE_PARAMS['slug'])) {
			$_GET['service'] = $ROUTE_PARAMS['slug'];
		}
		include 'pages/service-detail.php';
	});

	// ---- Admin (dashboard artikel blog) ----
	$r->addRoute('GET', '/admin', function ($ROUTE_PARAMS) {
		include 'pages/admin/dashboard.php';
	});
	$r->addRoute(['GET', 'POST'], '/admin/login', function ($ROUTE_PARAMS) {
		include 'pages/admin/login.php';
	});
	$r->addRoute('GET', '/admin/logout', function ($ROUTE_PARAMS) {
		auth_logout();
		header('Location: /admin/login');
		exit();
	});
	$r->addRoute('GET', '/admin/posts/create', function ($ROUTE_PARAMS) {
		$post = null;
		include 'pages/admin/post-form.php';
	});
	$r->addRoute('POST', '/admin/posts', function ($ROUTE_PARAMS) {
		$post = null;
		include 'pages/admin/post-form.php';
	});
	$r->addRoute('GET', '/admin/posts/{id}/edit', function ($ROUTE_PARAMS) {
		$post = blog_find((int) ($ROUTE_PARAMS['id'] ?? 0));
		if (!$post) {
			header('Location: /admin');
			exit();
		}
		include 'pages/admin/post-form.php';
	});
	$r->addRoute('POST', '/admin/posts/{id}', function ($ROUTE_PARAMS) {
		$post = blog_find((int) ($ROUTE_PARAMS['id'] ?? 0));
		if (!$post) {
			header('Location: /admin');
			exit();
		}
		include 'pages/admin/post-form.php';
	});
	$r->addRoute('POST', '/admin/posts/{id}/delete', function ($ROUTE_PARAMS) {
		include 'pages/admin/dashboard.php';
	});
});

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== ($pos = strpos($uri, '?'))) {
	$uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
	case FastRoute\Dispatcher::NOT_FOUND:
		http_response_code(404);
		die('Not found...');
		break;
	case FastRoute\Dispatcher::FOUND:
		$routeInfo[1]($routeInfo[2]);
		break;
}
