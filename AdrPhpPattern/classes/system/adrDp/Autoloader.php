<?php
/**
 * Created by PhpStorm.
 * User: salahtobok
 * Date: 25-09-2017
 * Time: 19:05
 */

namespace System\ADRdp;


class Autoloader
{
// define an autoloader function in the global namespace

 static public function loadStatic($class)
 {
// strip off any leading namespace separator from PHP 5.3
     $class = ltrim($class, '\\');

     // the eventual file path
     $subpath = '';

     // is there a PHP 5.3 namespace separator?
     $pos = strrpos($class, '\\');
     if ($pos !== false) {
         // convert namespace separators to directory separators
         $ns = substr($class, 0, $pos);
         $subpath = str_replace('\\', DIRECTORY_SEPARATOR, $ns)
             . DIRECTORY_SEPARATOR;
         // remove the namespace portion from the final class name portion
         $class = substr($class, $pos + 1);
     }

     // convert underscores in the class name to directory separators
     $subpath .= str_replace('_', DIRECTORY_SEPARATOR, $class);

     // the path to our central class directory location
     // go "up one directory" for the central classes location
     $dir = dirname(__DIR__) ;
     $dir = dirname($dir) ;
     // prefix with the central directory location and suffix with .php,
     // then require it.
     $file = $dir . DIRECTORY_SEPARATOR . $subpath . '.php';

     require $file;

}
}




