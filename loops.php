<?php
// for loop
for ($i = 1; $i <= 5; $i++) {
    echo "Iteration $i\n";
}

// while loop
$counter = 0;
while ($counter < 3) {
    echo "Count: $counter\n";
    $counter++;
}

// do-while loop
$number = 1;
do {
    echo "Number: $number\n";
    $number++;
} while ($number <= 3);

// foreach loop (array)
$colors = array("red", "green", "blue");
foreach ($colors as $color) {
    echo "Color: $color\n";
}

// nested loop
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 2; $j++) {
        echo "Outer: $i, Inner: $j\n";
    }
}

?>