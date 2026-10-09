<?php

$dispatcher = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $r) {
	$r->addRoute('GET', '/', function ($ROUTE_PARAMS) {
		include('pages/index.php');
	});
	$r->addRoute('GET', '/about', function ($ROUTE_PARAMS) {
		include('pages/about.php');
	});
	$r->addRoute('GET', '/blog-details', function ($ROUTE_PARAMS) {
		include('pages/blog-details.php');
	});
	$r->addRoute('GET', '/blog', function ($ROUTE_PARAMS) {
		include('pages/blog.php');
	});
	$r->addRoute('GET', '/case-studies', function ($ROUTE_PARAMS) {
		include('pages/case-studies.php');
	});
	$r->addRoute('GET', '/contact', function ($ROUTE_PARAMS) {
		include('pages/contact.php');
	});
	$r->addRoute('GET', '/error-401', function ($ROUTE_PARAMS) {
		include('pages/error-401.php');
	});
	$r->addRoute('GET', '/error-404', function ($ROUTE_PARAMS) {
		include('pages/error-404.php');
	});
	$r->addRoute('GET', '/faqs', function ($ROUTE_PARAMS) {
		include('pages/faqs.php');
	});
	$r->addRoute('GET', '/feature', function ($ROUTE_PARAMS) {
		include('pages/feature.php');
	});
	$r->addRoute('GET', '/service-detail', function ($ROUTE_PARAMS) {
		include('pages/service-detail.php');
	});

});

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
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
    