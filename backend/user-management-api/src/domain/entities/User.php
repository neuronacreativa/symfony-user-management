<?php

namespace App\userManagementApi\domain\entities;

use App\userManagementApi\domain\Exceptions\ValueObjectException;
use App\userManagementApi\domain\shared\Entity;
use App\userManagementApi\domain\valueObjects\DocumentIdentifier;
use App\userManagementApi\domain\valueObjects\Email;
use App\userManagementApi\domain\valueObjects\SurName;
use App\userManagementApi\domain\valueObjects\Name;
use Symfony\Component\Uid\Uuid;

class User implements Entity
{
    private string $uuid;
    private DocumentIdentifier $documentIdentifier;
    private Email $email;
    private Name $name;
    private SurName $firstName;
    private SurName $secondName;

    /**
     * @param string $documentIdentifier
     * @param string $email
     * @param string $name
     * @param string $firstName
     * @param string $secondName
     * @throws ValueObjectException
     */
    public function __construct(
        string $documentIdentifier,
        string $email,
        string $name,
        string $firstName,
        string $secondName)
    {
        $this->uuid = Uuid::v4();
        $this->documentIdentifier = new DocumentIdentifier($documentIdentifier);
        $this->email = new Email($email);
        $this->name = new Name($name);
        $this->firstName = new SurName($firstName);
        $this->secondName = new SurName($secondName);
    }

    /**
     * @return string
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }

    /**
     * @return DocumentIdentifier
     */
    public function getDocumentIdentifier(): DocumentIdentifier
    {
        return $this->documentIdentifier;
    }

    /**
     * @return Email
     */
    public function getEmail(): Email
    {
        return $this->email;
    }

    /**
     * @return Name
     */
    public function getName(): Name
    {
        return $this->name;
    }

    /**
     * @return SurName
     */
    public function getFirstName(): SurName
    {
        return $this->firstName;
    }

    /**
     * @return SurName
     */
    public function getSecondName(): SurName
    {
        return $this->secondName;
    }

    /**
     * @inheritDoc
     */
    function sameIdentityAs($other): bool
    {
        return $this->uuid == $other;
    }
}