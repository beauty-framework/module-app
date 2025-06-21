<?php
declare(strict_types=1);

namespace Module\Hello\Repositories;

class EmployersRepository implements EmployersRepositoryInterface
{

    /**
     * @return array[]
     */
    public function list(): array
    {
        return [
            [
                'name' => 'Perry',
                'species' => 'Platypus',
                'occupation' => 'Espionage',
                'role' => 'Special Agent',
                'affiliation' => 'OWCA',
            ]
        ];
    }
}