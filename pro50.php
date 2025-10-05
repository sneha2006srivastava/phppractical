<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['theme'])) {
    $selectedTheme = $_POST['theme'];
    
    setcookie("theme", $selectedTheme, time() + (86400 * 30), "/");
    
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}


$theme = isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Theme Preference</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            transition: background-color 0.3s, color 0.3s;
        }

        
        body.light {
            background-color: #ffffff;
            color: #000000;
        }

        
        body.dark {
            background-color: #121212;
            color: #f1f1f1;
        }

        .theme-buttons {
            margin-top: 20px;
        }

        .theme-buttons form {
            display: inline;
        }

        button {
            padding: 10px 20px;
            margin-right: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body class="<?php echo htmlspecialchars($theme); ?>">

    <h2>Welcome!</h2>
    <p>Your selected theme is: <strong><?php echo ucfirst($theme); ?> Mode</strong></p>

    <div class="theme-buttons">
        <form method="POST">
            <input type="hidden" name="theme" value="light">
            <button type="submit">Light Mode</button>
        </form>

        <form method="POST">
            <input type="hidden" name="theme" value="dark">
            <button type="submit">Dark Mode</button>
        </form>
    </div>

</body>
</html>
