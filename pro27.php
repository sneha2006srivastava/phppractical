<?php
// Store numbers in an array
$numbers = array(45, 12, 89, 33, 67, 5);

// Ascending order using sort()
$ascNumbers = $numbers; // copy original
sort($ascNumbers);
echo "Ascending Order: ";
foreach ($ascNumbers as $num) {
    echo $num . " ";
}
echo "\n<br>";

// Descending order using rsort()
$descNumbers = $numbers; // copy original
rsort($descNumbers);
echo "Descending Order: ";
foreach ($descNumbers as $num) {
    echo $num."";
}
?>