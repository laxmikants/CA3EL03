<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

class DatabaseConnectionException extends RuntimeException {}

function connectToDatabase($host, $user, $password, $database) {
    $mysqli = @new mysqli($host, $user, $password, $database);

    if ($mysqli->connect_errno) {
        throw new DatabaseConnectionException(
            "Database connection failed: " . $mysqli->connect_error,
            $mysqli->connect_errno
        );
    }

    return $mysqli; // successful connection
}

try {
    connectToDatabase("localhost", "wrong_user", "wrong_pass", "wrong_db");
} catch (DatabaseConnectionException $e) {
    echo "New message: " . $e->getMessage();
}
?>