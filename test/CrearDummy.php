<?php
namespace test;

use src\FactoryClassInterface;

use test\Dummy;

class CrearDummy implements FactoryClassInterface
{
    public function crear(array $array): Dummy
    {
        return new Dummy;
    }
}
