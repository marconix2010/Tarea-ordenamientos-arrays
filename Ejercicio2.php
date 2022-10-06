<?php


$arr  = [100,5,23,554,32,38,34,63,23,0,42,78,87,91];

function bubbleSort($arr){
  $length = count( $arr );
  $boundary =$length -1;
  $comparasiones  = 0;

  for ( $i = 0; $i < $length; $i++ ) {
    $swapped = false;
    $newBoundary= 0;
    for ( $j = 0; $j < $boundary; $j++ ) {
      $comparasiones++;

      if ( $arr[ $j ] > $arr[ $j + 1 ] ) {
        $tmp            = $arr[ $j + 1 ];
        $arr[ $j + 1 ]  = $arr[ $j ];
        $arr[ $j ]      = $tmp;
        $swapped = true;
        $newBoundary = $j;
      } 

    } 
    $boundary = $newBoundary;
    if(!$swapped){
        break;
    }
  } 

  return $arr;
} 


$sorted = bubbleSort( $arr );
echo 'Antes de ordenar ' . implode( ', ', $arr );
echo "\n";
echo 'Despues de ordenar '. implode( ', ', $sorted );
echo "\n";


$numerox = readline("Ingresa un numero ")."\n";
if (in_array($numerox, $sorted )) {
    echo "El numero existe dentro de array";
}
else {
    echo "El numero no existe dentro del array";
}




?>