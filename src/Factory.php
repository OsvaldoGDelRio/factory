<?php
declare(strict_types=1);
namespace src;

use Exception;
use src\FactoryInterface;

class Factory implements FactoryInterface
{
    private object $_clase;
    private string $_nombreDeLaClase;

    public function crear(string $nombreDeLaClase, ?array $parametros = array()): object
    {
        $this->_nombreDeLaClase = $this->verificarSiExisteLaClase($nombreDeLaClase);

        $this->_clase = new $this->_nombreDeLaClase;
        
        return $this->_clase->crear($parametros);
    }
    
    /**
     * @return class-string
     */
    private function verificarSiExisteLaClase(string $nombreDeLaClase): string
    {
        if (!class_exists($nombreDeLaClase)) {
            throw new Exception("La clase no existe");
        }

        return $nombreDeLaClase;
    }
}
