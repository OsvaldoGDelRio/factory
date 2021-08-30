<?php
declare(strict_types=1);
namespace src;
use Exception;
use src\FactoryInterface;

Class Factory implements FactoryInterface
{
    private $_clase;

    public function crear(string $nombreDeLaClase, ?array $parametros = array()): object
    {
        $this->_clase = $this->verificarSiExisteLaClase($nombreDeLaClase);

        $this->_clase = new $this->_clase;
        
        return $this->_clase->crear($parametros);
    }

    private function verificarSiExisteLaClase($nombreDeLaClase): string
    {
        if(!class_exists($nombreDeLaClase))
        {
            throw new Exception("La clase no existe", 1);
        }

        return $nombreDeLaClase;
    }
}