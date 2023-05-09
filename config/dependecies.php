<?php

declare(strict_types=1);

use Alura\Mvc\Controller\ConnectionController;
use DI\ContainerBuilder;

/** @var \Psr\Container\ContainerInterface $container */

$builder = new ContainerBuilder();
$builder->addDefinitions([
    PDO::class => function() {
        $pdo = ConnectionController::getInstance();
        return $pdo;
    },
    
]);

$container = $builder->build();

return $container;