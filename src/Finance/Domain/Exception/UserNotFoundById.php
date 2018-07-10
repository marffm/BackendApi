<?php

namespace Api\Finance\Domain\Exception;

class UserNotFoundById extends \RuntimeException
{

    public static function fromId(string $id): self
    {
        return new self(sprintf('User with id: "%s" not found.', $id));
    }

}