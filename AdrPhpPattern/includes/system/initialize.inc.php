<?php
//Include Setup file
require 'setup.inc.php';

//Include config file
require WWW_ROOT.'\includes\configuration\config.inc.php';

// output buffering is turned on
  ob_start();

// turn on sessions
  session_start();

// ****************************************** //
// ************ ERROR MANAGEMENT ************ //

$managementErrorHandler = new System\Management\ErrorHandler();

// Use my error handler:

//DEFINE('LIVE', true);
//
//set_error_handler($managementErrorHandler->my_error_handler());

// ************ ERROR MANAGEMENT ************ //
// ****************************************** //