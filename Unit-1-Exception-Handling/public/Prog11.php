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
    //connectToDatabase("localhost", "wrong_user", "wrong_pass", "wrong_db");
    $con = connectToDatabase("10.10.60.165", "root", "root", "lab114");    
    if($con) {
        echo "Connection successful!";
    }
} catch (DatabaseConnectionException $e) {
    echo "New message: " . $e->getMessage();
}
?>