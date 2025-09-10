
<!DOCTYPE html>
<html>
<head>
    <title>Simple Login</title>
</head>
<body>
    <h2>Login Form</h2>

    <!-- Login Form using POST method -->
    <form method="post" action="">
        Username: <input type="text" name="username" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>

    <?php
    // Check if form has been submitted
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Predefined username and password
        if ($username === "admin" && $password === "12345") {
            echo "<h3 style='color:green;'>Login successful!</h3>";
        } else {
            echo "<h3 style='color:red;'>Invalid credentials</h3>";
        }
    }
    ?>
</body>
</html>
