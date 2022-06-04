<?php
$name = 'nuris akbar';

/** local variable */
function localVariable(){
    $umur = 19;
    echo "Local variable umur = $umur".PHP_EOL;
}

/** global variable */
function globalVariable(){
    global $name;
    echo "Global variable name = $name".PHP_EOL;
}

/** static variable */
function staticVariable(){
    static $var1 = 1;
    $var2 = 1;
    $var1++;
    $var2++;
    echo "Static variable value = ".$var1.' - ';
    echo "Non Static variable value = ".$var2.PHP_EOL;
}

/** call */
localVariable();
globalVariable();
staticVariable();
staticVariable();