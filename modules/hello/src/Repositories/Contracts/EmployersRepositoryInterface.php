<?php
declare(strict_types=1);

namespace Module\Hello\Repositories\Contracts;

interface EmployersRepositoryInterface
{
    public function list(): array;
}