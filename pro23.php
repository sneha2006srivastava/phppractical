<?php
$arr = [64, 34, 25, 12, 22, 11, 90];
echo "Original:\n"; print_r($arr);
$functions = ["sort","rsort","asort","arsort","ksort","krsort",
              "usort","uasort","uksort","natsort","natcasesort"];
foreach ($functions as $fn){
    $copy = $arr;
    if (in_array($fn, ["usort","uasort","uksort"])) {
        $fn($copy, fn($a,$b) => $a <=> $b);
    } else {
        $fn($copy);
    }
    echo "\n$fn():\n"; print_r($copy);
}
$natArr = ["a10","a2","a1","a20"];
natsort($natArr);
echo "\nNatsort Example:\n"; print_r($natArr);
$natArr2 = ["a10","A2","a1","a20"];
natcasesort($natArr2);
echo "\nNatcasesort Example:\n"; print_r($natArr2);
?>