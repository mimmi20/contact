<?php
/**
 * This file is part of the mimmi20/contact package.
 *
 * Copyright (c) 2022-2023, Thomas Mueller <mimmi20@live.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace Mimmi20\Contact;

use DateTimeInterface;

final class Contact implements ContactInterface
{
    private int | null $contactId               = null;
    private string | null $salutation           = null;
    private string | null $firstname            = null;
    private string | null $familyname           = null;
    private string | null $street               = null;
    private string | null $housenumber          = null;
    private string | null $postalcode           = null;
    private string | null $city                 = null;
    private DateTimeInterface | null $birthdate = null;
    private string | null $email                = null;
    private string | null $phonenumber          = null;
    private string | null $profession           = null;

    /** @throws void */
    public function getContactId(): int | null
    {
        return $this->contactId;
    }

    /** @throws void */
    public function setContactId(int | null $value): void
    {
        $this->contactId = $value;
    }

    /** @throws void */
    public function getSalutation(): string | null
    {
        return $this->salutation;
    }

    /** @throws void */
    public function setSalutation(string | null $value): void
    {
        $this->salutation = $value;
    }

    /** @throws void */
    public function getFirstname(): string | null
    {
        return $this->firstname;
    }

    /** @throws void */
    public function setFirstname(string | null $value): void
    {
        $this->firstname = $value;
    }

    /** @throws void */
    public function getFamilyname(): string | null
    {
        return $this->familyname;
    }

    /** @throws void */
    public function setFamilyname(string | null $value): void
    {
        $this->familyname = $value;
    }

    /** @throws void */
    public function getStreet(): string | null
    {
        return $this->street;
    }

    /** @throws void */
    public function setStreet(string | null $value): void
    {
        $this->street = $value;
    }

    /** @throws void */
    public function getHousenumber(): string | null
    {
        return $this->housenumber;
    }

    /** @throws void */
    public function setHousenumber(string | null $value): void
    {
        $this->housenumber = $value;
    }

    /** @throws void */
    public function getPostalcode(): string | null
    {
        return $this->postalcode;
    }

    /** @throws void */
    public function setPostalcode(string | null $value): void
    {
        $this->postalcode = $value;
    }

    /** @throws void */
    public function getCity(): string | null
    {
        return $this->city;
    }

    /** @throws void */
    public function setCity(string | null $value): void
    {
        $this->city = $value;
    }

    /** @throws void */
    public function getBirthdate(): DateTimeInterface | null
    {
        return $this->birthdate;
    }

    /** @throws void */
    public function setBirthdate(DateTimeInterface | null $value): void
    {
        $this->birthdate = $value;
    }

    /** @throws void */
    public function getPhonenumber(): string | null
    {
        return $this->phonenumber;
    }

    /** @throws void */
    public function setPhonenumber(string | null $value): void
    {
        $this->phonenumber = $value;
    }

    /** @throws void */
    public function getEmail(): string | null
    {
        return $this->email;
    }

    /** @throws void */
    public function setEmail(string | null $value): void
    {
        $this->email = $value;
    }

    /** @throws void */
    public function getProfession(): string | null
    {
        return $this->profession;
    }

    /** @throws void */
    public function setProfession(string | null $value): void
    {
        $this->profession = $value;
    }

    /**
     * @return array<int>|array<null>|array<string>
     * @phpstan-return array{contactId: int|null, salutation: string|null, firstname: string|null, familyname: string|null, street: string|null, housenumber: string|null, city: string|null, birthdate: string|null, phonenumber: string|null, email: string|null, profession: string|null}
     *
     * @throws void
     */
    public function toArray(): array
    {
        $birthdate = $this->getBirthdate();

        if ($birthdate !== null) {
            $birthdate = $birthdate->format('Y-m-d');
        }

        return [
            'birthdate' => $birthdate,
            'city' => $this->getCity(),
            'contactId' => $this->getContactId(),
            'email' => $this->getEmail(),
            'familyname' => $this->getFamilyname(),
            'firstname' => $this->getFirstname(),
            'housenumber' => $this->getHousenumber(),
            'phonenumber' => $this->getPhonenumber(),
            'postalcode' => $this->getPostalcode(),
            'profession' => $this->getProfession(),
            'salutation' => $this->getSalutation(),
            'street' => $this->getStreet(),
        ];
    }
}
