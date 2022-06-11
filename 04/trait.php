<?php

trait Crud
{
    function create() {
        return 'create action';
    }
}

trait Auth
{
    function cekLogin() {
        return 'check login action';
    }
}

class Barang
{
    use Crud;
    use Auth;
}

$barang = new Barang();
echo $barang->cekLogin() .PHP_EOL;
echo $barang->create();