<?php

function quickSort($array){
    $lengthArray = count($array);

    if($lengthArray<1){
        return [];
    }

    $arr= [];
    $arrLeft=[];
    $arrRight=[];
    $pivot = $array[0];

    for($i=1; $i<$lengthArray; $i++ ){
        if($array[$i]<$pivot){
            array_push($arrLeft, $array[$i]);

        }else{
            array_push($arrRight, $array[$i]);

        }
    }
    array_push($arr,$pivot);
    return array_merge(quickSort($arrLeft),$arr, quickSort($arrRight));

}

$array1=[1,2,3,50,43,22,25,16,13];

echo implode(",", quickSort($array1));






?>