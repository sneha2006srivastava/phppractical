<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["username"])) {
    $username = htmlspecialchars($_POST["username"]);
    
    
    setcookie("username", $username, time() + (30 * 24 * 60 * 60));
} elseif (isset($_COOKIE["username"])) {
    $username = $_COOKIE["username"];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Personalized Greeting</title>
</head>
<body>
    <?php if (!empty($username)) : ?>
        <h2>Welcome back, <?php echo $username; ?>!</h2>
    <?php else: ?>
        <form method="POST" action="">
            <label for="username">Enter your name:</label>
            <input type="text" id="username" name="username" required>
            <button type="submit">Submit</button>
        </form>
    <?php endif; ?>
</body>
</html>
