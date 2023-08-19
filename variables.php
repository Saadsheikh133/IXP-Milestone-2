<?php
// Assigning values to variables
$name = "John";
$age = 30;
$height = 175.5;
$isStudent = true;

// Concatenating variables in strings
echo "Hello, my name is " . $name . " and I am " . $age . " years old.";

// Performing calculations with variables
$width = 10;
$length = 20;
$area = $width * $length;
echo "The area of the rectangle is: " . $area . " square units.\n";

// Variable scope
function myFunction()
{
    $localVariable = "I'm local!";
    echo $localVariable . "\n";
}

myFunction(); // Outputs: I'm local!

// Using global variables within a function
$globalVariable = "I'm global!";

function printGlobal()
{
    global $globalVariable;
    echo $globalVariable . "\n";
}

printGlobal(); // Outputs: I'm global!

// Super global arrays
echo "Your IP address is: " . $_SERVER['REMOTE_ADDR'] . "\n";

// Variable interpolation
$animal = "cat";
echo "I have a $animal.\n"; // Outputs: I have a cat.

// Variable variables
$dynamicVar = "message";
$message = "Hello, variable variables!";
echo $$dynamicVar . "\n"; // Outputs: Hello, variable variables!

?>