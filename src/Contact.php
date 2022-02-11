<?php

declare(strict_types = 1);

namespace Mimmi20\Contact;

use DateTimeInterface;

class Contact implements ContactInterface
{
    private ?int $contactId = null;

    private ?string $salutation = null;

    private ?string $firstname = null;

    private ?string $familyname = null;

    private ?string $street = null;

    private ?string $housenumber = null;

    private ?string $postalcode = null;

    private ?string $city = null;

    private ?DateTimeInterface $birthdate = null;

    private ?string $email = null;

    private ?string $phonenumber = null;

    private ?string $profession = null;

    public function getContactId(): ?int
    {
        return $this->contactId;
    }

    public function setContactId(?int $value): void
    {
        $this->contactId = $value;
    }

    public function getSalutation(): ?string
    {
        return $this->salutation;
    }

    public function setSalutation(?string $value): void
    {
        $this->salutation = $value;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(?string $value): void
    {
        $this->firstname = $value;
    }

    public function getFamilyname(): ?string
    {
        return $this->familyname;
    }

    public function setFamilyname(?string $value): void
    {
        $this->familyname = $value;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(?string $value): void
    {
        $this->street = $value;
    }

    public function getHousenumber(): ?string
    {
        return $this->housenumber;
    }

    public function setHousenumber(?string $value): void
    {
        $this->housenumber = $value;
    }

    public function getPostalcode(): ?string
    {
        return $this->postalcode;
    }

    public function setPostalcode(?string $value): void
    {
        $this->postalcode = $value;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $value): void
    {
        $this->city = $value;
    }

    public function getBirthdate(): ?DateTimeInterface
    {
        return $this->birthdate;
    }

    public function setBirthdate(?DateTimeInterface $value): void
    {
        $this->birthdate = $value;
    }

    public function getPhonenumber(): ?string
    {
        return $this->phonenumber;
    }

    public function setPhonenumber(?string $value): void
    {
        $this->phonenumber = $value;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $value): void
    {
        $this->email = $value;
    }

    public function getProfession(): ?string
    {
        return $this->profession;
    }

    public function setProfession(?string $value): void
    {
        $this->profession = $value;
    }

    /**
     * @return string[]|null[]
     * @phpstan-return array{contactId: string|null, salutation: string|null, firstname: string|null, familyname: string|null, street: string|null, housenumber: string|null, city: string|null, birthdate: string|null, phonenumber: string|null, email: string|null, profession: string|null}
     */
    public function toArray(): array
    {
        $birthdate = $this->getBirthdate();

        if (null !== $birthdate) {
            $birthdate = $birthdate->format('Y-m-d');
        }

        return [
            'contactId'   => $this->getContactId(),
            'salutation'  => $this->getSalutation(),
            'firstname'   => $this->getFirstname(),
            'familyname'  => $this->getFamilyname(),
            'street'      => $this->getStreet(),
            'housenumber' => $this->getHousenumber(),
            'postalcode'  => $this->getPostalcode(),
            'city'        => $this->getCity(),
            'birthdate'   => $birthdate,
            'phonenumber' => $this->getPhonenumber(),
            'email'       => $this->getEmail(),
            'profession'  => $this->getProfession(),
        ];
    }
}
