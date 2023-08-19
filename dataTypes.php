<?php
// integer
$age = 25;
$quantity = 10;

// float
$price = 29.99;
$pi = 3.14159;

// string
$name = "Alice";
$message = "Hello, $name!";

// Boolean
$isTrue = true;
$isFalse = false;

// array
$fruits = array("apple", "banana", "orange");
$numbers = [1, 2, 3, 4, 5];

// object
class Person
{
    public $name;
    public $age;
}

$person = new Person();
$person->name = "John";
$person->age = 30;

// null
$emptyValue = null;

// callable
$func = function ($x) {
    return $x * 2;
};

$result = $func(5); // Returns 10
echo $result ;

// closer
$closure = function ($name) {
    return "Hello, $name!";
};

echo $closure("Alice"); // Outputs: Hello, Alice!


?>