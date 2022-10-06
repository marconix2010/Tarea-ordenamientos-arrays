<?php

function merge_Sort($arr){
    $lengthArray = count($arr);
    if ($lengthArray == 1) return $arr;

        $mitad =$lengthArray/2;

        $left=array_slice($arr,0,$mitad);
        $right=array_slice($arr, $mitad);

        $left=merge_sort($left);
        $right=merge_sort($right);

        return merge($left, $right);
}

    function merge($left, $right){
    $arrOrdenado= array();

        while (count($left) > 0 && count($right) > 0){

            if ($left[0]>$right[0]){
                $arrOrdenado[] = $right[0];
                $right = array_slice($right,1);

}else{
                $arrOrdenado[] = $left[0];
                $left = array_slice($left,1);
}
}
            while(count($left)>0){
                $arrOrdenado[] = $left[0];
                $left = array_slice($left, 1);
}
            while(count($right)>0){
                $arrOrdenado[]= $right[0];
                $right = array_slice($right, 1);
}
            
            return $arrOrdenado;
}


 


$array1 = array(12,22,3,5,18,20,7);
$array2 = array(13,100,53,78,6,4,1);


print_r(merge_Sort($array1));
echo "\n";
print_r(merge_Sort($array2));


$resultado1=merge_Sort($array1);
$resultado2= merge_Sort($array2);
$resultado3= array_merge($resultado1,$resultado2);
print_r($resultado3);

print_r(merge_Sort($resultado3));

$suma = 0;
foreach ($resultado3 as $numero) {
    $suma += $numero;
}

echo "Total Suma: $suma";















?>