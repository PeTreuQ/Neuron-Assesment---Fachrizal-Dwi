<?php

$fruits = ['mango', 'apple', 'banana', 'grape'];
$serizalize = serialize($fruits);
$unserialized = unserialize($serizalize);

echo $serizalize.PHP_EOL;
print_r($unserialized);