<?php

class Process
{
    function returnInteger():int{
        return 10;
    }
    function returnArray():array{
        return ['one', 'two', 'three'];
    }

    function returnString():string{
        return 'some string';
    }
}

$integer = new Process();
echo $integer->returnInteger().PHP_EOL;
print_r($integer->returnArray());
echo $integer->returnString();