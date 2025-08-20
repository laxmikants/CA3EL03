<?php

// Example of different types of variables in PHP
$integerVar = 42; // Integer
$floatVar = 3.14; // Float
$stringVar = "Hello, PHP!"; // String
$boolVar = true; // Boolean
$arrayVar = array(1, 2, 3, "four"); // Array

class Car {
	public $brand = "Toyota";
}
$objectVar = new Car(); // Object

$nullVar = null; // Null

echo "Integer: $integerVar\n";
echo "Float: $floatVar\n";
echo "String: $stringVar\n";
echo "Boolean: ".($boolVar ? 'true' : 'false')."\n";
echo "Array: ";
print_r($arrayVar);
echo "Object (brand): " . $objectVar->brand . "\n";
echo "Null: ";
var_dump($nullVar);

?>

