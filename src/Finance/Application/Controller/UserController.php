<?php

namespace Api\Finance\Application\Controller;

use Api\Finance\Domain\Entity\User;
use Api\Finance\Domain\Exception\UserNotFoundById;
use Api\Finance\Domain\Repository\UserRepositoryInterface;
use Psr\Container\ContainerInterface;

class UserController
{

    /**
     * @var ContainerInterface
     */
    private $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function getUser($args): string
    {
        $userRepository = $this->container->get(UserRepositoryInterface::class);
        $user = $userRepository->findOneById($args['id']);
        if (! $user instanceof User) {
            throw UserNotFoundById::fromId($args['id']);
        }

        // Create class to manage Output
        return json_encode($user->jsonSerialize());
    }


}