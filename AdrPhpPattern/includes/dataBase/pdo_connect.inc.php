<?php
/**
 * Created by PhpStorm.
 * User: salahtobok
 * Date: 28-09-2017
 * Time: 18:31
 */


// Set the database access information as constants:

require_once 'credentials.inc.php';

/* Connect to a MySQL database using driver invocation */

$dsn = 'mysql:dbname='.DB_NAME.';';
$dsn = $dsn.'host='.DB_HOST;
$dsn = $dsn.'charset='.DB_CS;

$db = new PDO($dsn,DB_USER,DB_PASSWORD);