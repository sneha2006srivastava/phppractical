<?php
$array = [];
for ($i = 0; $i < 10; $i++){
$array[$i] = $i + 1;
}
foreach ($array as $index =>$value){
 echo "Index $index => Value$value\n <br>";
}
?>