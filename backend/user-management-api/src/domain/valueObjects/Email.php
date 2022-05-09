<?php

namespace App\userManagementApi\domain\valueObjects;

use App\userManagementApi\domain\shared\ValueObject;

class Email implements ValueObject
{
    private string $email;

    /**
     * @param string $email
     */
    public function __construct(string $email)
    {
        // TODO
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @inheritDoc
     */
    function sameValueAs($other): bool
    {
        return $this->getEmail() == $other;
    }
}