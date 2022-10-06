<?php


$arr  = [2,3,16,766,123,56,0,320,6,5,112,100,5,71,9];

function bubbleSort($arr){
  $length = count( $arr );
  $boundary =$length -1;
  $comparasiones  = 0;

  for ( $i = 0; $i < $length; $i++ ) {
    $swapped = false;
    $newBoundary= 0;
    for ( $j = 0; $j < $boundary; $j++ ) {
      $comparasiones++;

      if ( $arr[ $j ] < $arr[ $j + 1 ] ) {
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
  echo  "numero de comparasiones ".$comparasiones;
  echo "\n";
  return $arr;
} 

$sorted = bubbleSort( $arr );
echo 'Antes de ordenar ' . implode( ', ', $arr );
echo "\n";
echo 'Despues de ordenar '. implode( ', ', $sorted );
echo "\n";




?>