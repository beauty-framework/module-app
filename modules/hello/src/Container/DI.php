<?php
declare(strict_types=1);

namespace Module\Hello\Container;

use Beauty\Core\Container\ContainerManager;
use Module\Hello\Repositories\EmployersRepositoryInterface;
use Module\Hello\Repositories\EmployersRepository;

class DI
{
    public static function configure(ContainerManager $container): void
    {
        $container->bind(EmployersRepositoryInterface::class, EmployersRepository::class);
    }
}