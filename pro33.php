<?php
// Sample associative array
$student = array(
    "name" => "Alice",
    "age" => 21,
    "course" => "Computer Science"
);

// Key to check
$key = "age";

// Check if the key exists using array_key_exists()
if (array_key_exists($key, $student)) {
    echo "The key '$key' exists in the array. Value: " . $student[$key];
} else {
    echo "The key '$key' does not exist in the array.";
}
?>