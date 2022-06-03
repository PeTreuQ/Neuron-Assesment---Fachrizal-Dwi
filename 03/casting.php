<?php
$var1 = 19;//type integer
$var2 = "18"; //type string
$nilai = 18.5;//type decimal
$boolean = true;
$string2 = "14.5";

echo gettype($string2).PHP_EOL;
echo gettype($nilai).PHP_EOL;

echo (int)$nilai .PHP_EOL;// casting from decimal to integer
echo (double) $var1 . PHP_EOL; //casting from string to integer
echo (int) $var2 . PHP_EOL; //casting from string to integer
echo $boolean . PHP_EOL; //casting boolean to integer