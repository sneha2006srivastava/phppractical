
<!DOCTYPE html>
<html>
<head>
    <title>Welcome Page</title>
</head>
<body>
    <h2>Enter Your Name</h2>

    <!-- HTML Form using POST method -->
    <form method="post" action="">
        Name: <input type="text" name="username" required><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    // Check if form is submitted using POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['username']); // Secure input
        echo "<h3>Welcome, $name!</h3>";
    }
    ?>
</body>
</html>
