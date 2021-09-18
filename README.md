[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/OsvaldoGDelRio/factory/badges/quality-score.png?b=main)](https://scrutinizer-ci.com/g/OsvaldoGDelRio/factory/?branch=main)
[![Code Coverage](https://scrutinizer-ci.com/g/OsvaldoGDelRio/factory/badges/coverage.png?b=main)](https://scrutinizer-ci.com/g/OsvaldoGDelRio/factory/?branch=main)
[![Build Status](https://scrutinizer-ci.com/g/OsvaldoGDelRio/factory/badges/build.png?b=main)](https://scrutinizer-ci.com/g/OsvaldoGDelRio/factory/build-status/main)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/OsvaldoGDelRio/factory/badges/code-intelligence.svg?b=main)](https://scrutinizer-ci.com/code-intelligence)

# Factory

Clase sencilla para generar otras clases más complejas sin necesidad de construir los parametros o los constructores de las mismas en cascada

## composer

```shell
composer require osvaldogdelrio/factory
```

## uso

```php
<?php
/*
Ejemplos de uso
*/

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

/*
Creamos la clase Dummy a partir de una clase que devuelve Dummy, esto permite pasar Factory dentro de un contenedor sin necesidad de pasar los parametros del constructor en el momento de la carga de controladores o modelos, se puede pasar una interfaz de Factory
*/

use src\Factory;

$factory = new Factory;

$dummy = $factory->crear('test\CrearDummy', []);

print_r($dummy->llamandoUnMetodo());

/*Output
Llamando un metodo de la clase Dummy
*/
```