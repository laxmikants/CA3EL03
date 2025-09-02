<?php

class DatabaseConnectionException extends RuntimeException {}

function connectToDatabase($host, $user, $password, $database) {
    // Enable exception mode for mysqli
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    try {
        $mysqli = new mysqli($host, $user, $password, $database);
        return $mysqli;
    } catch (mysqli_sql_exception $e) {
        throw new DatabaseConnectionException(
            "Database connection failed", 
            500, 
            $e
        );
    }
}

try {
    connectToDatabase("localhost", "wrong_user", "wrong_pass", "wrong_db");
} catch (DatabaseConnectionException $e) {
    echo "New message: " . $e->getMessage();
}
?>