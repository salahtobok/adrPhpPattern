<?php
/**
 * Created by PhpStorm.
 * User: salahtobok
 * Date: 29-09-2017
 * Time: 14:29
 */

namespace System\User;


class OperationsHandler
{

    /**
     * OperationsHandler constructor.
     */
    public function __construct()
    {
    }

    // ******************************************* //
// ************ REDIRECT FUNCTION ************ //

// This function redirects invalid users.
// It takes two arguments:
// - The session element to check
// - The destination to where the user will be redirected.
    function redirect_invalid_user($check = 'user_id', $destination = 'index.php', $protocol = 'http://') {

        // Check for the session item:
        if (!isset($_SESSION[$check])) {
            $url = $protocol . BASE_URL . $destination; // Define the URL.
            header("Location: $url");
            exit(); // Quit the script.
        }

    } // End of redirect_invalid_user() function.

// ************ REDIRECT FUNCTION ************ //
// ******************************************* //

// Omit the closing PHP tag to avoid 'headers already sent' errors!
}