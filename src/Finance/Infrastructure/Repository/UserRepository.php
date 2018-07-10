<?php

namespace Api\Finance\Infrastructure\Repository;

use Api\Finance\Domain\Entity\User;

class UserRepository
{

    /**
     * Return user from Id
     * @param string $id
     * @return User
     */
    public function findOneById(string $id): User
    {
        // Mock of User
        $user = [
            'id' => $id,
            'name' => 'John',
            'last_name' => 'Doe',
            'email' => 'test@email.com'
        ];

        return User::fromArray($user);
    }

}