<?php

declare(strict_types=1);

namespace App\Controller;


use App\Component\User\FullNameDto;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Serializer\SerializerInterface;

#[AsController]
class UserFullNameAction
{
    public function __invoke(Request $request, SerializerInterface $serializer) {

        return $serializer->deserialize($request->getContent(), FullNameDto::class, 'json');

    }
}