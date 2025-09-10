<!DOCTYPE html>
<html>
<head>
    <title>Online Quiz</title>
</head>
<body>
    <h2>Simple Online Quiz</h2>

    <!-- Quiz Form using POST -->
    <form method="post" action="">
        <p>1. Which language is used for server-side scripting?</p>
        <input type="radio" name="q1" value="PHP" required> PHP<br>
        <input type="radio" name="q1" value="HTML"> HTML<br>
        <input type="radio" name="q1" value="CSS"> CSS<br><br>

        <p>2. Which symbol is used to start a variable in PHP?</p>
        <input type="radio" name="q2" value="$" required> $<br>
        <input type="radio" name="q2" value="#"> #<br>
        <input type="radio" name="q2" value="@"> @<br><br>

        <p>3. Which HTML tag is used to create a hyperlink?</p>
        <input type="radio" name="q3" value="a" required> &lt;a&gt;<br>
        <input type="radio" name="q3" value="link"> &lt;link&gt;<br>
        <input type="radio" name="q3" value="href"> href<br><br>

        <input type="submit" value="Submit Quiz">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $score = 0;

        // Correct answers
        if (isset($_POST['q1']) && $_POST['q1'] === "PHP") {
            $score++;
        }
        if (isset($_POST['q2']) && $_POST['q2'] === "$") {
            $score++;
        }
        if (isset($_POST['q3']) && $_POST['q3'] === "a") {
            $score++;
        }

        echo "<h3>Your Score: $score / 3</h3>";
    }
    ?>
</body>
</html>
