<?php
declare(strict_types=1);

namespace App\Container;


use Beauty\Core\Container\ContainerManager;
use Psr\Log\LoggerInterface;
use Spiral\RoadRunner\Logger;

class DI
{
    /**
     * @param ContainerManager $container
     * @return void
     */
    public static function configure(ContainerManager $container): void
    {
        $container->singleton(LoggerInterface::class, fn() => new Logger('stdout'));
    }
}