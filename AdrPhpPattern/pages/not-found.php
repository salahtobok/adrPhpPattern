<?php
/**
 * Created by PhpStorm.
 * User: salahtobok
 * Date: 25-09-2017
 * Time: 22:56
 */

//Include setup file
require dirname(__DIR__) . '/includes/system/initialize.inc.php';


$request = new System\ADRdp\Request($GLOBALS);
$response = new System\ADRdp\Response(VIEW_DIR);
$controller = new \Controller\System\NotFound($request, $response);

$response = $controller->__invoke();

$response->send();