<?php

abstract class Car
{
    public $merk;
    abstract public function turnOnMachine($merk);
}

class Audy extends Car
{
    public function turnOnMachine($merk)
    {
        return 'Turn On Machine Car '.$merk;
    }
}
$audy = new Audy();
echo $audy->turnOnMachine('audy');
