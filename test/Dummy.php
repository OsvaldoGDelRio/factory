<?php
namespace test;

class Dummy
{
    public function crear()
    {
        return new \stdClass;
    }

    public function llamandoUnMetodo()
    {
        echo 'Llamando un metodo de la clase Dummy';
    }
}