<?php

class MyObject{
    /** Membuat sebuah static property */
    static $instance = 0;

    public function __construct()
    {
        /** Melakukan increament terhadap property instance */
        $this->instance = ++self::$instance;
    }

    public function __clone()
    {
        $this->instance = ++self::$instance;
    }
}
/** Membuat object yang merupakan instance dari class MyObject */
$obj1 = new MyObject();
print_r($obj1);

/** Membuat proses clone dari $obj1 */
$obj2 = clone $obj1;
print_r($obj2);