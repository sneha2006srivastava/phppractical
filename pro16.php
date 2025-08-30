<?php
// Using for loop
echo "<h3>Using for loop:</h3>";
for ($i = 1; $i <= 20; $i++) {
    echo $i . " ";
}

echo "<br><br>";

// Using while loop
echo "<h3>Using while loop:</h3>";
$i = 1;
while ($i <= 20) {
    echo $i . " ";
    $i++;
}

echo "<br><br>";

// Using do-while loop
echo "<h3>Using do-while loop:</h3>";
$i = 1;
do {
    echo $i . " ";
    $i++;
} while($i<=20);
?>