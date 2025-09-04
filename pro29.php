<?php
// Original indexed array with duplicate values
$numbers = [1, 2, 3, 2, 4, 5, 3, 6, 1, 7, 5];

// Remove duplicates using array_unique()
$uniqueNumbers = array_unique($numbers);

// Re-index the array (optional, to reset keys)
$uniqueNumbers = array_values($uniqueNumbers);

// Display results
echo "Original Array:\n<br>";
print_r($numbers);

echo "<br>\nArray after removing duplicates:\n<br>";
print_r($uniqueNumbers);
?>