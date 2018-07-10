<?php

use Api\Finance\Domain\Repository\UserRepositoryInterface;
use Api\Finance\Infrastructure\Repository\UserRepository;
use Psr\Container\ContainerInterface;

$container = $app->getContainer();

$container[UserRepositoryInterface::class] = function (ContainerInterface $container) {
    return new UserRepository();
};