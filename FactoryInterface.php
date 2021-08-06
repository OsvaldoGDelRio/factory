<?php
namespace factory;

interface FactoryInterface
{
    public function crear(string $nombreDeLaClase, array $parametros): object;
}