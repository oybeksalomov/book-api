<?php

declare(strict_types=1);

namespace App\Controller;

use App\Component\User\MaxAgeDto;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Attribute\AsController;

#[AsController]
class UserGetMaxAgeAction extends AbstractController
{
    public function __invoke(UserRepository $userRepository): MaxAgeDto
    {
        return new MaxAgeDto($userRepository->findMaxAge());
    }
}