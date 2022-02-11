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

interface ContactInterface
{
    public function getContactId(): ?int;

    public function setContactId(?int $value): void;

    public function getSalutation(): ?string;

    public function setSalutation(?string $value): void;

    public function getFirstname(): ?string;

    public function setFirstname(?string $value): void;

    public function getFamilyname(): ?string;

    public function setFamilyname(?string $value): void;

    public function getStreet(): ?string;

    public function setStreet(?string $value): void;

    public function getHousenumber(): ?string;

    public function setHousenumber(?string $value): void;

    public function getPostalcode(): ?string;

    public function setPostalcode(?string $value): void;

    public function getCity(): ?string;

    public function setCity(?string $value): void;

    public function getBirthdate(): ?DateTimeInterface;

    public function setBirthdate(?DateTimeInterface $value): void;

    public function getPhonenumber(): ?string;

    public function setPhonenumber(?string $value): void;

    public function getEmail(): ?string;

    public function setEmail(?string $value): void;

    public function getProfession(): ?string;

    public function setProfession(?string $value): void;

    /**
     * @return int[]|null[]|string[]
     * @phpstan-return array{contactId: int|null, salutation: string|null, firstname: string|null, familyname: string|null, street: string|null, housenumber: string|null, city: string|null, birthdate: string|null, phonenumber: string|null, email: string|null, profession: string|null}
     */
    public function toArray(): array;
}
