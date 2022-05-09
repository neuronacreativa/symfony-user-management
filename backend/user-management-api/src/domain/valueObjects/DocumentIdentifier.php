<?php

namespace App\userManagementApi\domain\valueObjects;

use App\userManagementApi\domain\Exceptions\ValueObjectException;
use App\userManagementApi\domain\shared\ValueObject;

class DocumentIdentifier implements ValueObject
{
    private string $documentIdentifier;

    /**
     * @throws ValueObjectException
     */
    private function validate(string $documentIdentifier): string
    {
        // TODO: Has to validate
        if ($documentIdentifier == "shit") {
            throw new ValueObjectException();
        }
        return $documentIdentifier;
    }

    /**
     * @param string $documentIdentifier
     * @throws ValueObjectException
     */
    public function __construct(string $documentIdentifier)
    {
        $this->documentIdentifier = $this->validate($documentIdentifier);
    }

    /**
     * @return string
     */
    public function getDocumentIdentifier(): string
    {
        return $this->documentIdentifier;
    }

    /**
     * @inheritDoc
     */
    function sameValueAs($other): bool
    {
        return $other == $this->documentIdentifier;
    }
}