<?php
/**
 * This file is part of the mimmi20/contact package.
 *
 * Copyright (c) 2022, Thomas Mueller <mimmi20@live.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace Mimmi20\Contact;

use DateTimeInterface;

final class Contact implements ContactInterface
{
    private int | null $contactId = null;

    private string | null $salutation = null;

    private string | null $firstname = null;

    private string | null $familyname = null;

    private string | null $street = null;

    private string | null $housenumber = null;

    private string | null $postalcode = null;

    private string | null $city = null;

    private DateTimeInterface | null $birthdate = null;

    private string | null $email = null;

    private string | null $phonenumber = null;

    private string | null $profession = null;

    public function getContactId(): int | null
    {
        return $this->contactId;
    }

    public function setContactId(int | null $value): void
    {
        $this->contactId = $value;
    }

    public function getSalutation(): string | null
    {
        return $this->salutation;
    }

    public function setSalutation(string | null $value): void
    {
        $this->salutation = $value;
    }

    public function getFirstname(): string | null
    {
        return $this->firstname;
    }

    public function setFirstname(string | null $value): void
    {
        $this->firstname = $value;
    }

    public function getFamilyname(): string | null
    {
        return $this->familyname;
    }

    public function setFamilyname(string | null $value): void
    {
        $this->familyname = $value;
    }

    public function getStreet(): string | null
    {
        return $this->street;
    }

    public function setStreet(string | null $value): void
    {
        $this->street = $value;
    }

    public function getHousenumber(): string | null
    {
        return $this->housenumber;
    }

    public function setHousenumber(string | null $value): void
    {
        $this->housenumber = $value;
    }

    public function getPostalcode(): string | null
    {
        return $this->postalcode;
    }

    public function setPostalcode(string | null $value): void
    {
        $this->postalcode = $value;
    }

    public function getCity(): string | null
    {
        return $this->city;
    }

    public function setCity(string | null $value): void
    {
        $this->city = $value;
    }

    public function getBirthdate(): DateTimeInterface | null
    {
        return $this->birthdate;
    }

    public function setBirthdate(DateTimeInterface | null $value): void
    {
        $this->birthdate = $value;
    }

    public function getPhonenumber(): string | null
    {
        return $this->phonenumber;
    }

    public function setPhonenumber(string | null $value): void
    {
        $this->phonenumber = $value;
    }

    public function getEmail(): string | null
    {
        return $this->email;
    }

    public function setEmail(string | null $value): void
    {
        $this->email = $value;
    }

    public function getProfession(): string | null
    {
        return $this->profession;
    }

    public function setProfession(string | null $value): void
    {
        $this->profession = $value;
    }

    /**
     * @return int[]|null[]|string[]
     * @phpstan-return array{contactId: int|null, salutation: string|null, firstname: string|null, familyname: string|null, street: string|null, housenumber: string|null, city: string|null, birthdate: string|null, phonenumber: string|null, email: string|null, profession: string|null}
     */
    public function toArray(): array
    {
        $birthdate = $this->getBirthdate();

        if (null !== $birthdate) {
            $birthdate = $birthdate->format('Y-m-d');
        }

        return [
            'contactId' => $this->getContactId(),
            'salutation' => $this->getSalutation(),
            'firstname' => $this->getFirstname(),
            'familyname' => $this->getFamilyname(),
            'street' => $this->getStreet(),
            'housenumber' => $this->getHousenumber(),
            'postalcode' => $this->getPostalcode(),
            'city' => $this->getCity(),
            'birthdate' => $birthdate,
            'phonenumber' => $this->getPhonenumber(),
            'email' => $this->getEmail(),
            'profession' => $this->getProfession(),
        ];
    }
}
