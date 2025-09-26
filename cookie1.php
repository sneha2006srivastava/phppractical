<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["username"])) {
    $name = htmlspecialchars($_POST["username"]);
    setcookie("username", $name, time() + (86400 * 30), "/"); 
    header("Location: " . $_SERVER['PHP_SELF']); 
    exit();
}


$storedName = isset($_COOKIE["username"]) ? $_COOKIE["username"] : "";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Personalized Greeting</title>
</head>
<body>

<?php if ($storedName): ?>
    <h2>Welcome back, <?php echo htmlspecialchars($storedName); ?>!</h2>
<?php else: ?>
    <h2>Please enter your name:</h2>
    <form method="post" action="">
        <input type="text" name="username" required>
        <input type="submit" value="Submit">
    </form>
<?php endif; ?>

</body>
</html>
