<?php
ini_set('log_errors', 1);
ini_set('error_log', __DIR__ . '/../logs/error.log');
error_reporting(E_ALL);
ini_set('display_errors', 0);

// Catch ONLY fatal shutdown errors
register_shutdown_function(function () {
    $error = error_get_last();

    if ($error !== null && in_array($error['type'], [
        E_ERROR,
        E_PARSE,
        E_CORE_ERROR,
        E_COMPILE_ERROR
    ])) {
        error_log(
            "[FATAL] {$error['message']} in {$error['file']} on line {$error['line']}\n",
            3,
            __DIR__ . '/../logs/error.log'
        );
    }
});
