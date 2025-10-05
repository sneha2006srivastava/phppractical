<?php
$visitCount = 1; 

if (isset($_COOKIE['visit_count'])) {
    
    $visitCount = $_COOKIE['visit_count'] + 1;
}

setcookie('visit_count', $visitCount, time() + (86400 * 30), "/");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Visitor Counter</title>
</head>
<body>

<h2>
    <?php
    if ($visitCount == 1) {
        echo "This is your first visit!";
    } else {
        echo "You have visited $visitCount times.";
    }
    ?>
</h2>

</body>
</html>
