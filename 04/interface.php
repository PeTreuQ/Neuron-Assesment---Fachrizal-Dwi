<?php

interface Crud
{
    public function create();
    public function read();
    public function update();
    public function delete();
}

class CrudBarang implements Crud
{
    public function read()
    {
        echo 'display all records';
    }

    public function create()
    {
        // TODO: Implement create() method.
    }

    public function delete()
    {
        // TODO: Implement delete() method.
    }

    public function update()
    {
        // TODO: Implement update() method.
    }

}

$crudBrg = new CrudBarang();
$crudBrg->read();