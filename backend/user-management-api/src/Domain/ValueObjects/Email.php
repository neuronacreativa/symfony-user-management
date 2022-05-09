<?php

namespace App\Domain\ValueObjects;

use App\Domain\Shared\ValueObject;

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