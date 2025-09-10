<!DOCTYPE html>
<html>
<head>
    <title>Feedback Form</title>
</head>
<body>
    <h2>Feedback Form</h2>

    <!-- Feedback Form using POST method -->
    <form method="post" action="">
        Name: <input type="text" name="name" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        Message: <textarea name="message" required></textarea><br><br>

        <input type="submit" value="Submit Feedback">
    </form>

    <?php
    // Check if form was submitted
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        // (Optional) You could save feedback to database or a file here

        // Redirect to thankyou.php with name in URL
        header("Location: thankyou.php?name=" . urlencode($name));
        exit;
    }
    ?>
</body>
</html>
