<?php
//Set the text color using a PHP variable
$color = "blue";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP paragraph with css</title>
</head>
<body>
    <?php
    //Display a paragraph with inline css using PHP
    echo"<p style='color:$color;
    font-size:18px;'>This is a paragraph styeled with PHP and css.</p>";
    ?>
    </body>
</html>