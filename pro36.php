<?php
// Check if 'name' parameter exists in the URL
if (isset($_GET['name']) && !empty($_GET['name'])) {
    // Get the name and sanitize it to prevent XSS attacks
    $name = htmlspecialchars($_GET['name']);
    echo "Hello, " . $name;
} else {
    echo "Hello,Guest";
}
?>