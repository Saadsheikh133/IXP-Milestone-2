<?php
// Using echo and var_dump for Output:
// You can use echo to output variable values and messages to help identify issues.
$number = 42;
echo "Value of number: " . $number . '<br>';

$array = array(1, 2, 3);
var_dump($array); // Output detailed information about the array

// Using print_r for Readable Array Output:

// The print_r function provides a more readable representation of arrays and objects.
$person = array("name" => "John", "age" => 30);
echo "<pre>" . '<br>';
print_r($person) . '<br>';
echo "</pre>" . '<br>';

/*
Using error_reporting for Errors:
Configure the error_reporting level to catch and display PHP errors.
*/
error_reporting(E_ALL); // Display all types of errors

// Using try and catch for Exception Handling:
try {
    // Code that might throw an exception
} catch (Exception $e) {
    echo "Caught exception: " . $e->getMessage();
}

// Using var_dump for Debugging:
$variable = "Hello, world!";
var_dump($variable);

// Inspecting Server Variables:
echo "Server IP: " . $_SERVER['SERVER_ADDR'];


// Using die or exit for Immediate Termination:
if ($error_condition) {
    die("An error occurred.");
}

?>