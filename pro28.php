<?php
// Define an array
$fruits = array("apple", "banana", "cherry", "mango");

// Value to search
$searchValue = "banana";

// Check if value exists in array
if (in_array($searchValue, $fruits)) {
    echo "$searchValue exists in the array.";
} else {
    echo "$searchValue does not exist in the array.";
}
?>