<?php


$arraynumerico = array(100,5,23,554,32,38,34,63,23,0,42,78,87,91);

//orden ascendente
sort($arraynumerico);
echo implode(',', $arraynumerico);
echo "\n";

$numerox = readline("Ingresa un numero ")."\n";
if (in_array($numerox, $arraynumerico )) {
    echo "El numero existe dentro de array";
}
else {
    echo "El numero no existe dentro del array";
}

?>