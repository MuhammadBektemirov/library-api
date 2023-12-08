<?php

declare(strict_types=1);

namespace App\Component\User;

use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

class FullNameDto
{
    public function __construct(
        #[Groups(['user:read', 'user:write'])]
        private string $givenName,

        #[Groups(['user:write'])]
        private string $familyName,

        #[Groups(['user:write'])]
        #[Assert\Positive(message: 'Musbat raqam kiriting')]
        private int $age
    ) {
    }

    public function getGivenName(): string
    {
        return $this->givenName;
    }

    public function getFamilyName(): string
    {
        return $this->familyName;
    }

    public function getAge(): int
    {
        return $this->age;
    }
}