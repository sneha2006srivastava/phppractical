<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>
    <h2>Contact Us</h2>

    <!-- Contact Form using GET method -->
    <form method="get" action="thankyou.php">
        Name: <input type="text" name="name" required><br><br>
        Subject: <input type="text" name="subject" required><br><br>
        Message: <textarea name="message" required></textarea><br><br>

        <input type="submit" value="Send Message">
    </form>
</body>
</html>
