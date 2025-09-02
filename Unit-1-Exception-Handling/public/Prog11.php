<?php
class MyDatabaseException extends RuntimeException {
    public function __construct($message, $code = 0, Exception $previous = null) {
        echo "hi". $message ."";
    }
}

function connecttodb($server,$username,$password,$database) {
try {    
    $myconn = new mysqli($server, $username, $password, $database);
} catch (RuntimeException $e) {
    throw new MyDatabaseException($e->getMessage(), $e->getCode(), $e);
}
}


try {
    echo connecttodb("localhost","root","root","lab114");
} catch (RuntimeException $e) {
    throw new MyDatabaseException($e->getMessage(), $e->getCode(), $e);

}
?>