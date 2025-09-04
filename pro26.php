<?php
// Create an array of 6 elements
$numbers = [10, 20, 30, 40, 50, 60];

echo "Original Array: <br>";
print_r($numbers);

echo "<br><br>Reverse (without array_reverse()): <br>";
// Loop from end to start
for ($i = count($numbers) - 1; $i >= 0; $i--) {
    echo $numbers[$i] . " ";
}

echo "<br><br>Reverse (with array_reverse()): <br>";
$reversed = array_reverse($numbers);
print_r($reversed);
?>