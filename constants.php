<?php
// Defining a constant
define("PI", 3.14159);

// Using the constant
$radius = 5;
$area = PI * ($radius ** 2);
echo "The area of the circle is: " . $area . "\n";

// Defining constants with different data types
define("APP_NAME", "My Awesome App");
define("VERSION", 1.2);
define("IS_ACTIVE", true);

echo "Welcome to " . APP_NAME . " (Version " . VERSION . ")\n";

// Constants with arrays
define("FRUITS", ["apple", "banana", "orange"]);

echo "My favorite fruit is " . FRUITS[0] . "\n";

// Magic Constants
echo "The current file is: " . __FILE__ . "\n";
echo "The current line number is: " . __LINE__ . "\n";
echo "The current directory is: " . __DIR__ . "\n";

?>