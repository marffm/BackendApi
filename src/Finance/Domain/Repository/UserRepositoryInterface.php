<?php

namespace Api\Finance\Domain\Repository;

use Api\Finance\Domain\Entity\User;

interface UserRepositoryInterface
{

    public function findOneById(string $id): User;

}