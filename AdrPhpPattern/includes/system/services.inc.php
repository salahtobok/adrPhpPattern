<?php
/**
 * Created by PhpStorm.
 * User: salahtobok
 * Date: 25-09-2017
 * Time: 17:28
 */

// set a container service for the router
$pages_dir = dirname(__DIR__);
$pages_dir = dirname($pages_dir) . '/pages';

$di = new \System\ADRdp\Di($GLOBALS);

//Global Services

$di->set('router', function () use ($di) {
    $router = new \System\ADRdp\Router($di->pages_dir);
    $router->setRoutes(include 'routes.inc.php');
    return $router;
});

$di->set('request', function () use ($di) {
    return new \System\ADRdp\Request($GLOBALS);
});


$di->set('response', function () use ($di) {
    return new \System\ADRdp\Response(VIEW_DIR);
});

$di->set('not-found', function () use ($di) {
    return new \Controller\System\NotFound($di->get('request'),$di->get('response'));
});

//Include Another Services

require_once 'services\systems\signIn\signIn.php';