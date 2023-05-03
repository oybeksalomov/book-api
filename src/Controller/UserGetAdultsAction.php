<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Attribute\AsController;

#[AsController]
class UserGetAdultsAction extends AbstractController
{
    public function __invoke(UserRepository $userRepository): array
    {
        $users = $userRepository->findAll();
        $result = [];

        foreach ($users as $user) {
            if ($user->getAge() >= 18) {
                $result[] = $user;
            }
        }

        return $result;
    }
}