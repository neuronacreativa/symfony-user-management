<?php

namespace App\userManagementApi\domain\valueObjects;

use App\userManagementApi\domain\shared\ValueObject;

class Name implements ValueObject
{

    private string $name;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        // TODO
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }


    /**
     * @inheritDoc
     */
    function sameValueAs($other): bool
    {
        return $this->getName() == $other;
    }
}