
<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <h2>Simple Calculator</h2>

    <!-- Form using POST method -->
    <form method="post" action="">
        Number 1: <input type="number" name="num1" step="any" required><br><br>
        Number 2: <input type="number" name="num2" step="any" required><br><br>
        
        Operation:
        <select name="operation" required>
            <option value="+">Addition (+)</option>
            <option value="-">Subtraction (-)</option>
            <option value="*">Multiplication (*)</option>
            <option value="/">Division (/)</option>
        </select>
        <br><br>

        <input type="submit" value="Calculate">
    </form>

    <?php
    // Check if form is submitted
    if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operation'])) {
        $num1 = (float) $_POST['num1'];
        $num2 = (float) $_POST['num2'];
        $operation = $_POST['operation'];
        $result = 0;

        // Perform selected operation
        switch ($operation) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "<h3 style='color:red;'>Error: Division by zero is not allowed.</h3>";
                    exit;
                }
                break;
            default:
                echo "<h3 style='color:red;'>Invalid operation selected.</h3>";
                exit;
        }

        echo "<h3>Result: $num1 $operation $num2 = $result</h3>";
    }
    ?>
</body>
</html>
