<?php
// Indexed array
$numbers = array(45, 12, 78, 34, 89, 23, 67);

// Initialize with first element
$largest = $numbers[0];
$smallest = $numbers[0];

// Loop through array to find largest and smallest
foreach ($numbers as $num) {
    if ($num > $largest) {
        $largest = $num;
    }
    if ($num < $smallest) {
        $smallest = $num;
    }
}

// Display results
echo "Numbers: " . implode(", ", $numbers) . "<br>";
echo "Largest number: " . $largest . "<br>";
echo "Smallest number: " . $smallest."<br>";
?>