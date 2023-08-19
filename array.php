<?php
// Indexed Array
$fruits = array("apple", "banana", "orange");
echo $fruits[0] . '<br>';
echo $fruits[1] . '<br>';
echo $fruits[2] . '<br>';

// Associative Array
$person = array(
    "name" => "John",
    "age" => 30,
    "city" => "New York"
);

echo "Name: " . $person["name"] . '<br>'; // Output: Name: John
echo "Age: " . $person["age"] . '<br>'; // Output: Age: 30
echo "City: " . $person["city"] . '<br>'; // Output: City: New York

// Multidimensional Array
$matrix = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

echo $matrix[1][2] . '<br>'; // Output: 6 (second row, third column)

// Looping through an Array
$colors = array("red", "green", "blue");

foreach ($colors as $color) {
    echo $color . "\n" . ', ';
}


?>