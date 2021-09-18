<?php
declare(strict_types=1);
namespace tests;

use \PHPUnit\Framework\TestCase;
use Exception;
use src\Factory;
use tests\CrearDummy;

class FactoryTest extends TestCase
{
    public function setUp(): void
    {
        $this->class = new Factory();
        $this->crearDummy = new CrearDummy;
    }

    public function testSiLaClaseNoExisteSeEsperaUnaExcepcion()
    {
        $this->expectException(Exception::class);
        $this->class->crear('Hola', array('hola'));
    }

    public function testSiLaClaseExisteYDevuelveUnObjeto()
    {
        $this->assertIsObject($this->class->crear('tests\Dummy', array()));
    }

    public function testSiRegresaUnaClaseEsConsideradaUnObjeto()
    {
        $this->assertIsObject($this->crearDummy->crear(array()));
    }
}