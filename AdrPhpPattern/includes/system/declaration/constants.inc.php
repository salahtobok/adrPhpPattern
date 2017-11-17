<?php
/**
 * Created by PhpStorm.
 * User: salahtobok
 * Date: 26-09-2017
 * Time: 12:33
 */
//  View folder path
$path = dirname(__DIR__);
$path = dirname($path);
$path = dirname($path);

define("VIEW_DIR", $path . '/views');
// unset path variable content

// Determine location of files and the URL of the site:
define ('BASE_URI', '/docroot');

define ('WWW_ROOT', $path);

define ('BASE_URL', 'localhost');

unset($path);
