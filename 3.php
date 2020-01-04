<?php 
$numbers = array(5,0,8,4,1,11,7,6,2,3,10,9,4);
ksort($numbers);

$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
    echo $numbers[$x];
    echo "<br>";
}

 ?>