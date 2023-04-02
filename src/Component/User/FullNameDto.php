<?php

declare(strict_types=1);

namespace App\Component\User;

use Symfony\Component\Serializer\Annotation\Groups;

class FullNameDto
{
    public function __construct(

        #[Groups(['user:write', 'user:read'])]
        private string $firstName,

        #[Groups(['user:write', 'user:read'])]
        private string $familyName,

        #[Groups(['user:write'])]
        private int $age
    ) {
    }

    public function getFirstName(): string
    {
        return $this->firstName;
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