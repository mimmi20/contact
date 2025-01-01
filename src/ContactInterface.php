<?php

/**
 * This file is part of the mimmi20/contact package.
 *
 * Copyright (c) 2022-2025, Thomas Mueller <mimmi20@live.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace Mimmi20\Contact;

use DateTimeInterface;

interface ContactInterface
{
    /** @throws void */
    public function getContactId(): int | null;

    /** @throws void */
    public function setContactId(int | null $value): void;

    /** @throws void */
    public function getSalutation(): string | null;

    /** @throws void */
    public function setSalutation(string | null $value): void;

    /** @throws void */
    public function getFirstname(): string | null;

    /** @throws void */
    public function setFirstname(string | null $value): void;

    /** @throws void */
    public function getFamilyname(): string | null;

    /** @throws void */
    public function setFamilyname(string | null $value): void;

    /** @throws void */
    public function getStreet(): string | null;

    /** @throws void */
    public function setStreet(string | null $value): void;

    /** @throws void */
    public function getHousenumber(): string | null;

    /** @throws void */
    public function setHousenumber(string | null $value): void;

    /** @throws void */
    public function getPostalcode(): string | null;

    /** @throws void */
    public function setPostalcode(string | null $value): void;

    /** @throws void */
    public function getCity(): string | null;

    /** @throws void */
    public function setCity(string | null $value): void;

    /** @throws void */
    public function getBirthdate(): DateTimeInterface | null;

    /** @throws void */
    public function setBirthdate(DateTimeInterface | null $value): void;

    /** @throws void */
    public function getPhonenumber(): string | null;

    /** @throws void */
    public function setPhonenumber(string | null $value): void;

    /** @throws void */
    public function getEmail(): string | null;

    /** @throws void */
    public function setEmail(string | null $value): void;

    /** @throws void */
    public function getProfession(): string | null;

    /** @throws void */
    public function setProfession(string | null $value): void;

    /**
     * @return array<int>|array<null>|array<string>
     * @phpstan-return array{contactId: int|null, salutation: string|null, firstname: string|null, familyname: string|null, street: string|null, housenumber: string|null, postalcode: string|null, city: string|null, birthdate: string|null, phonenumber: string|null, email: string|null, profession: string|null}
     *
     * @throws void
     */
    public function toArray(): array;
}
