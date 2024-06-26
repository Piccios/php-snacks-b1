<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->


<?php
    $casualNums = [];


    for ($i = 0; $i <= 15; $i++) {
                $num = rand(1, 100);
    if (!in_array($num, $casualNums)){
        array_push($casualNums, $num);
    }}

    var_dump($casualNums);
?>