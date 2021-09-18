<?php
namespace tests;

use src\FactoryClassInterface;

use tests\Dummy;

class CrearDummy implements FactoryClassInterface
{
    public function crear(array $array): Dummy
    {
        return new Dummy;
    }
}
