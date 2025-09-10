
<!DOCTYPE html>
<html>
<head>
    <title>Sum of Two Numbers</title>
</head>
<body>
    <h2>Enter Two Numbers</h2>

    <!-- HTML Form using GET method -->
    <form method="get" action="">
        Number 1: <input type="number" name="num1" required><br><br>
        Number 2: <input type="number" name="num2" required><br><br>
        <input type="submit" value="Calculate Sum">
    </form>

    <?php
    // Check if numbers are provided in the URL
    if (isset($_GET['num1']) && isset($_GET['num2'])) {
        $num1 = (float) $_GET['num1'];  // Convert to number
        $num2 = (float) $_GET['num2'];
        $sum = $num1 + $num2;

        echo "<h3>The sum of $num1 and $num2 is: $sum</h3>";
    }
    ?>
</body>
</html>
