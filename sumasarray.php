<?php

$array1 = array(12,22,3,5,18,20,7);
$array2 = array(13,100,53,78,6,4,1);

for($i=0; $i<7; $i++){
    $total[]= $array1[$i] + $array2[$i];
}

echo implode(',' , $total);








?>