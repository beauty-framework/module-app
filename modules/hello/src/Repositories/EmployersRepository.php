<?php
declare(strict_types=1);

namespace Module\Hello\Repositories;

use Module\Hello\Repositories\Contracts\EmployersRepositoryInterface;

class EmployersRepository implements EmployersRepositoryInterface
{

    public function list(): array
    {
        return [
            [
                'name' => 'Perry',
                'species' => 'Platypus',
                'occupation' => 'Espionage',
                'role' => 'Special Agent',
                'affiliation' => 'OWCA',
            ],
        ];
    }
}