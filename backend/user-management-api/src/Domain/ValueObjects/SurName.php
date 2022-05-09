<?php

namespace App\Domain\ValueObjects;

use App\Domain\Shared\ValueObject;

class SurName implements ValueObject
{

    private string $surName;

    /**
     * @param string $surName
     */
    public function __construct(string $surName)
    {
        // TODO
        $this->surName = $surName;
    }

    /**
     * @return string
     */
    public function getSurName(): string
    {
        return $this->surName;
    }

    function sameValueAs($other): bool
    {
        return $this->getSurName() == $other;
    }
}