<?php
require_once dirname(__DIR__) . '/includes/system/initialize.inc.php';
require_once dirname(__DIR__) . '/includes/system/services.inc.php';

// get the shared router service
$router = $di->get('router');

// match against the url path
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


$route = $router->match($path);


// container service, or page script?
if ($di->has($route)) {
    // create a new $controller instance
    $controller = $di->newInstance($route);
    // invoke the controller and send the response
    $response = $controller->__invoke();
    $response->send();
} else {
    // require the page script
    require $route;
}



