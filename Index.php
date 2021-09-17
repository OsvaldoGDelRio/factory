<?php
/*
Ejemplos de uso
*/

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

/*
Creamos la clase Dummy a partir de una clase que devuelve Dummy, esto permite pasar Factory dentro de un contenedor sin necesidad de pasar los parametros del constructor en el momento
*/

use src\Factory;

$factory = new Factory;

$dummy = $factory->crear('test\CrearDummy');

print_r($dummy->llamandoUnMetodo());

/*Output
Llamando un metodo de la clase Dummy
*/
