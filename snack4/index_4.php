<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->


<?php
$casualNums = [];

while (count($casualNums) <= 15) {

    $num = rand(1, 100);
    if (!in_array($num, $casualNums)) {
        array_push($casualNums, $num);
        //$casualNums[] = $num; **opzione possibile per aggiungere in array**
    }
}

var_dump($casualNums);

?>