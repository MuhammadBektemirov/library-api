<?php

declare(strict_types=1);

namespace App\Component\User;

use Symfony\Component\Serializer\Annotation\Groups;

class MaxAgeDto
{
    public function __construct(
        #[Groups(['user:read'])]
        private int $age
    ) {
    }

    public function getAge(): int
    {
        return $this->age;
    }
}