<?php
/**
 * Created by PhpStorm.
 * User: salahtobok
 * Date: 29-09-2017
 * Time: 14:12
 */

namespace System\Management;


class ErrorHandler
{
    // Function for handling errors.
// Takes five arguments: error number, error message (string), name of the file where the error occurred (string)
// line number where the error occurred, and the variables that existed at the time (array).
// Returns true.
    /**
     * ErrorHandler constructor.
     */
    public function __construct()
    {
    }

    public function my_error_handler($e_number = null, $e_message = null, $e_file = null, $e_line = null, $e_vars = null) {

        // Build the error message:
        $message = "An error occurred in script '$e_file' on line $e_line:\n$e_message\n";

        // Add the backtrace:
        $message .= "<pre>" .print_r(debug_backtrace(), 1) . "</pre>\n";

        // Or just append $e_vars to the message:
        //	$message .= "<pre>" . print_r ($e_vars, 1) . "</pre>\n";

        if (!LIVE) { // Show the error in the browser.

            echo '<div class="alert alert-danger">' . nl2br($message) . '</div>';

        } else { // Development (print the error).

            // Send the error in an email:
            error_log ($message, 1, NOTIFICATION_EMAIL, 'From:admin@example.com');

            // Only print an error message in the browser, if the error isn't a notice:
            if ($e_number != E_NOTICE) {
                echo '<div class="alert alert-danger">A system error occurred. We apologize for the inconvenience.</div>';
            }

        } // End of $live IF-ELSE.

        return true; // So that PHP doesn't try to handle the error, too.

    } // End of my_error_handler() definition.
}