<?php
// Associative array of countries and their capitals
$countries = array(
    "India" => "New Delhi",
    "USA" => "Washington,D.C.",
    "Canada" => "Ottawa",
    "Germany" => "Berlin",
    "France" => "Paris",
    "Italy" => "Rome",
    "Japan" => "Tokyo"
    
);

// Capital city to search for
$capital = "Berlin";

// Search for the country by its capital
$country = array_search($capital, $countries);

if ($country !== false) {
    echo "The capital city $capital belongs to $country.";
} else {
    echo "Capital city $capital not found in the array.";
}
?>