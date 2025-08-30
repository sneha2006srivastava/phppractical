<?php
// Create an indexed array of size 10
$numbers = array();

// Store values in the array using index numbers
for ($i = 0; $i < 10; $i++) {
    $numbers[$i] = $i + 1; // Assign values from 1 to 10
}

// Print the array elements with their index numbers
echo "<h3>Indexed Array of Size 10</h3>";
for ($i = 0; $i < 10; $i++) {
    echo "Index [$i] = " . $numbers[$i]."<br>";
}
?>