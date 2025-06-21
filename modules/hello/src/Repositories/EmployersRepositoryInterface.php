<?php
declare(strict_types=1);

namespace Module\Hello\Repositories;

interface EmployersRepositoryInterface
{
    /**
     * @return array
     */
    public function list(): array;
}