<?php
class Parents {
    public $name;
    public function __construct()
    {
        $this->name = $name;
    }
    public function bar ()
    {
        echo 'This function bar from class Parents AND Hellow '.$this->name.PHP_EOL;
    }
}

class Childs extends Parents {
    public function bar()
    {
//        parent::bar();
        echo 'This function bar from class Childs AND Hellow '.$this->name .PHP_EOL;
    }
}

$child1 = new Childs('John Doe');
$child1->bar();