<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body>
    <h2>User Registration</h2>

    <!-- Registration Form using POST method -->
    <form method="post" action="">
        Username: <input type="text" name="username"><br><br>
        Email: <input type="email" name="email"><br><br>
        Password: <input type="password" name="password"><br><br>

        <input type="submit" value="Register">
    </form>

    <?php
    // Process form when submitted
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        // Validate if fields are empty
        if (empty($username) || empty($email) || empty($password)) {
            echo "<p style='color:red;'>All fields are required. Please fill them out.</p>";
        } else {
            // Show confirmation message
            echo "<h3>Registration Successful!</h3>";
            echo "<p><strong>Username:</strong> " . htmlspecialchars($username) . "</p>";
            echo "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";
            echo "<p><strong>Password:</strong> (hidden for security)</p>";
        }
    }
    ?>
</body>
</html>
