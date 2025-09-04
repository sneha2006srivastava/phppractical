<?php
$arr = array();
for ($i = 0; $i < 10; $i++) {
 $arr[$i] = $i;}   
for ($i = 0; $i < count($arr); $i++){
echo "Index $i =>".$arr[$i]."<br>";
}
?>