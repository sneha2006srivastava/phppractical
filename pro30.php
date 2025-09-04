<?php
// Create associative array
$countries = [
    "France" => "Paris",
    "Japan" => "Tokyo",
    "Brazil" => "Brasília",
    "Canada" => "Ottawa",
    "Australia" => "Canberra"
];

// Print using foreach
foreach ($countries as $country => $capital) {
    echo "The capital of $country is $capital.<br>";
}
?>