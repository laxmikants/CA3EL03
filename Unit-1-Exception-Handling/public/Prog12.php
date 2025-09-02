<?php

function divide( $a, $b ) {
    return $a / $b;
}

try {

    $a = 10; 
    $b = 0;
    $c = divide( $a, $b );
    echo $c;
} catch ( Exception $e ) {
    echo $e->getMessage() ."Divide by zero";
} catch(DivisionByZeroError $e ) {
    echo $e->getMessage() ."inside division by zero error";
}
finally {
    echo "finaly block executed";
}
?>