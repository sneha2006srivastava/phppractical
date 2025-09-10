
<!DOCTYPE html>
<html>
<head>
    <title>Result</title>
</head>
<body>
    <h2>Enter Your Marks</h2>

    <!-- HTML Form using GET method -->
    <form method="get" action="">
        Marks: <input type="number" name="marks" required><br><br>
        <input type="submit" value="Check Result">
    </form>

    <?php
    // Check if marks are provided in the URL
    if (isset($_GET['marks'])) {
        $marks = (int) $_GET['marks']; // Convert to integer

        if ($marks >= 40) {
            echo "<h3 style='color:green;'>PASS</h3>";
        } else {
            echo "<h3 style='color:red;'>FAIL</h3>";
        }
    }
    ?>
</body>
</html>
