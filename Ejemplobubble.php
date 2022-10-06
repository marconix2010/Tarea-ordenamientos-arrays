<?php


function bubbleSort($array){
    $resultArr = $array; //Nuevo array
   
    $arrLenght = count($resultArr)-1; //asignamos el lenght como los index
    $swapped = true; //variable para comprobar si realizar cambios
    $aux=0; //variable auxiliar de almacenamiento temporal
    $comparasiones  = 0;//a travez de esta variable vemos el performace del codigo usado en bubblesort
   
    while($swapped){ //solo va a ejecutar si hay que realizar cambios
        $swapped = false; // cambiar el estado por si no hay que realizar cambios
       
        for($i = 0; $i < $arrLenght; $i++){ //ejecutamos la iteracion
            $comparasiones++;
           
            if($resultArr[$i] < $resultArr[$i+1])  //comprobacion si el index es mayor que el index siguiente
            {                                      
                $aux = $resultArr[$i]; //almacena el numero actual
                $resultArr[$i]= $resultArr[$i+1]; //cambiar el numero actual por el siguiente
                $resultArr[$i+1]=$aux; //el siguiente pasa a ser el numero anterior
                $swapped=true; //cambia el estado para seguir realizando cambios
            }
        }
    }
    echo  "numero de comparasiones ".$comparasiones;
    echo "\n";
    return $resultArr;
   
}

var_dump(bubbleSort([2,3,16,766,123,56,0,320,6,5,112,100,5,71,9,58,46,48,45,84]));





?>