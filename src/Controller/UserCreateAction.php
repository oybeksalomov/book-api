<?php

declare(strict_types=1);

namespace App\Controller;

use App\Component\User\UserFactory;
use App\Entity\User;
use Symfony\Component\HttpKernel\Attribute\AsController;

#[AsController]
class UserCreateAction
{
    public function __construct(private UserFactory $userFactory)
    {
    }

    public function __invoke(User $data)
    {
        $this->userFactory->create($data->getEmail(), $data->getPassword());
        exit;
    }
}