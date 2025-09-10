<!-- details.php -->
<?php
if (isset($_GET['name']) && isset($_GET['age'])) {
    $name = htmlspecialchars($_GET['name']); // Secure name
    $age = htmlspecialchars($_GET['age']);   // Secure age
    echo "Hello $name, you are $age years old.";
} else {
    echo "Please provide both name and age in the URL.";
}
?>
