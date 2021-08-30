<?php
declare(strict_types=1);
namespace test;

use src\Factory;
use Exception;
use \PHPUnit\Framework\TestCase;

class FactoryTest extends TestCase
{
    public function setUp(): void
    {
        $this->class = new Factory();
    }

    public function testSiLaClaseNoExisteSeEsperaUnaExcepcion()
    {
        $this->expectException(Exception::class);
        $this->class->crear('Hola', array('hola'));
    }

    public function testLaClaseDevuelveUnObjeto()
    {
        $this->assertIsObject($this->class->crear('test\Dummy', array() ) );
    }
}