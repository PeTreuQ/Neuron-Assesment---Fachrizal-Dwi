<?php

function swapVariable($param1, $param2){
    echo "Parameter 1 : $param1, Parameter 2 : $param2".PHP_EOL;

    //change value by reference
    $swap = $param1;
    $param1 = $param2;
    $param2 = $swap;
    echo "Parameter 1 : $param1, Parameter 2 : $param2".PHP_EOL;
}

echo swapVariable(10,20);