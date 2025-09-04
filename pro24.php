<?php
// Store numbers in an indexed array
$numbers = array(5, 10, 15, 20, 25);

// Calculate the sum of all numbers
$sum = 0;
foreach ($numbers as $num) {
    $sum += $num;
}

// Print the result
echo "Numbers: ";
print_r($numbers);
echo "Sum of numbers:".$sum;
?>