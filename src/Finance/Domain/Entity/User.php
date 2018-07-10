<?php

namespace Api\Finance\Domain\Entity;

class User
{
    /**
     * @var string
     */
    private $id;
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $lastName;
    /**
     * @var null|string
     */
    private $email;

    /**
     * User constructor.
     * @param null|string $id
     * @param string $name
     * @param string $lastName
     * @param null|string $email
     */
    public function __construct(
        ?string $id,
        string $name,
        string $lastName,
        ?string $email
    ) {
        $this->id = $id ?? uniqid('a', true);
        $this->name = $name;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @return null|string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }


    /**
     * Generates an entity from array
     * @param array $data
     * @return User
     */
    public static function fromArray(array $data): self
    {
        return new self(
            $data['id'] ?? null,
            $data['name'],
            $data['last_name'],
            $data['email'] ?? null
        );
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return get_object_vars($this);
    }


}