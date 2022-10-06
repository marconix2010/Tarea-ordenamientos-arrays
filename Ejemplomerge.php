<?php

function merge_sort($array){
    //validar para saber si nuestro array tiene 1 elemento
    if(count($array) == 1 ) return $array;
    //contamos y divimos el array para saber la mitad
    $mid = count($array)/2;
    //array_slice — Extraer una parte de un array
    //extramos del indice 0 hasta la mitad es izq el resto es derecho
    $left = array_slice($array,0,$mid);
    $right = array_slice($array, $mid);
    //aplicamos recursion para seguir dividiendo
    $left = merge_sort($left);
    $right = merge_sort($right);
    //llamamos a merge para ordenarlo y almacenarlo en otro array
    return merge($left,$right);
}

//recibimos dos parametros, izquierda y derecha
function merge($left, $right){
    //inicializamos un nuevo array para almacenar el array ordenado
    $resp = array();
   
    //mientras tengamos valores en la izquierda y en la derecha
    while(count($left) > 0 && count($right) > 0){
        //validar si el indice izquierdo es mayor que el derecho
        if($left[0]>$right[0]){
            //almacerlo en el array de la respuesta
            $resp[] = $right[0];
            // lo quitamos del array
            $right = array_slice($right,1);
        }else{
            //almacerlo en el array de la respuesta
            $resp[] = $left[0];
            //lo quitamos del array
            $left = array_slice($left,1);
        }
    }
   
    //en caso de que solo la izquierda tenga un valor
    while(count($left)>0){
        //almacerlo en el array de la respuesta
        $resp[] = $left[0];
         //lo quitamos del array
        $left = array_slice($left, 1);
    }
   
     //en caso de que solo la derecha tenga un valor
    while(count($right)>0){
         //almacerlo en el array de la respuesta
        $resp[]= $right[0];
         //lo quitamos del array
        $right = array_slice($right, 1);
    }
   
    return $resp;
}

$array1 = array(23,5,7,230,1,4,100);

echo implode(',',merge_sort($array1));


?>