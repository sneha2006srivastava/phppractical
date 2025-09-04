<?php
// Associative array of fruits and their prices
$fruits = array(
    "Apple" => 120,
    "Banana" => 60,
    "Orange" => 100,
    "Mango" => 150,
    "Grapes" => 90
);

echo "Original Array:\n";
print_r($fruits);

// Sorting by values (ascending)
asort($fruits);
echo "<br>\nSorted by Values (asort):\n<br>";
print_r($fruits);

// Sorting by keys (ascending)
ksort($fruits);
echo "<br>\nSorted by Keys (ksort):\n<br>";
print_r($fruits);
?>