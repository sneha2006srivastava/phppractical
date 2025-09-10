
<!DOCTYPE html>
<html>
<head>
    <title>Favorite Programming Language</title>
</head>
<body>
    <h2>Which is your favorite programming language?</h2>

    <!-- Form using POST method -->
    <form method="post" action="">
        <input type="radio" name="language" value="PHP" required> PHP<br>
        <input type="radio" name="language" value="JavaScript"> JavaScript<br>
        <input type="radio" name="language" value="Python"> Python<br><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    // Check if form is submitted
    if (isset($_POST['language'])) {
        $selected = htmlspecialchars($_POST['language']); // Secure input
        echo "<h3>You selected: $selected</h3>";
    }
    ?>
</body>
</html>
