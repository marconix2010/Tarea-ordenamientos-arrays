<?php

function quick_Sort($array){
    //caso de que sea 0 retornamos el array vacio
    if(count($array)<1) return [];
   
    //iniciamos el array para almacenar el pivot
    $arr=[];
    // array left para los mas chicos
    $left=[];
    //array right para los mas grandes
    $right=[];
    // valor para la comprobacion
    $pivot=$array[0];
   
    for($i=1; $i<count($array);$i++){
        //validar si la posicion actual es menor que el pivote
        if($array[$i]<$pivot){
            //caso de que si lo sea, lo almacenamos en la izquierda
            array_push($left, $array[$i]);
        }else{
            //caso de que no lo sea, lo almacenamos en la derecha
            array_push($right, $array[$i]);
        }
    }
    //array push para asignar el valor a un array
    array_push($arr,$pivot);
    // ejecuto la funcion llamandola recursivamente con la Izquierda y la derecha
    return array_merge(quick_Sort($left),$arr,quick_Sort($right));
}

$array1 = [2,3,250,1,123,54,6,0];
echo implode(',',quick_Sort($array1));



?>