<?php
/**
 * Created by PhpStorm.
 * User: salahtobok
 * Date: 25-09-2017
 * Time: 23:58
 */
//Path declaration
// Going up
$path = dirname(__DIR__);
$path = dirname($path);
$path = dirname($path);

define("AUTOLOADER_PATH",  $path. '/classes/system/adrDp/Autoloader.php');
// require the autoloader class file
require_once AUTOLOADER_PATH;
// STATIC OPTION: registering a static method with SPL
spl_autoload_register(array('System\ADRdp\Autoloader', 'loadStatic'));
// unset path variable content
unset($path);
