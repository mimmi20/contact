<?php

/**
 * This file is part of the mimmi20/contact package.
 *
 * Copyright (c) 2022-2024, Thomas Mueller <mimmi20@live.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace Mimmi20\Contact;

use DateTimeImmutable;
use Exception;
use PHPUnit\Framework\ExpectationFailedException;
use PHPUnit\Framework\TestCase;

final class ContactTest extends TestCase
{
    private Contact $object;

    /** @throws void */
    protected function setUp(): void
    {
        $this->object = new Contact();
    }

    /** @throws ExpectationFailedException */
    public function testSetGetContactId(): void
    {
        self::assertNull($this->object->getContactId());

        $id = 1;

        $this->object->setContactId($id);
        self::assertSame($id, $this->object->getContactId());
    }

    /** @throws ExpectationFailedException */
    public function testSetGetSalutation(): void
    {
        self::assertNull($this->object->getSalutation());

        $salutation = 'xyz';

        $this->object->setSalutation($salutation);
        self::assertSame($salutation, $this->object->getSalutation());
    }

    /** @throws ExpectationFailedException */
    public function testSetGetFirstname(): void
    {
        self::assertNull($this->object->getFirstname());

        $firstname = 'testvorname';

        $this->object->setFirstname($firstname);
        self::assertSame($firstname, $this->object->getFirstname());
    }

    /** @throws ExpectationFailedException */
    public function testSetGetFamilyname(): void
    {
        self::assertNull($this->object->getFamilyname());

        $familyname = 'testnachname';

        $this->object->setFamilyname($familyname);
        self::assertSame($familyname, $this->object->getFamilyname());
    }

    /** @throws ExpectationFailedException */
    public function testSetGetStreet(): void
    {
        self::assertNull($this->object->getStreet());

        $street = 'teststrasse';

        $this->object->setStreet($street);
        self::assertSame($street, $this->object->getStreet());
    }

    /** @throws ExpectationFailedException */
    public function testSetGetHousenumber(): void
    {
        self::assertNull($this->object->getHousenumber());

        $housenumber = '1a';

        $this->object->setHousenumber($housenumber);
        self::assertSame($housenumber, $this->object->getHousenumber());
    }

    /** @throws ExpectationFailedException */
    public function testSetGetPostalcode(): void
    {
        self::assertNull($this->object->getPostalcode());

        $postalcode = '01234';

        $this->object->setPostalcode($postalcode);
        self::assertSame($postalcode, $this->object->getPostalcode());
    }

    /** @throws ExpectationFailedException */
    public function testSetGetCity(): void
    {
        self::assertNull($this->object->getCity());

        $city = 'testStadt';

        $this->object->setCity($city);
        self::assertSame($city, $this->object->getCity());
    }

    /**
     * @throws ExpectationFailedException
     * @throws Exception
     */
    public function testSetGetBirthdate(): void
    {
        self::assertNull($this->object->getBirthdate());

        $birthdate = new DateTimeImmutable();

        $this->object->setBirthdate($birthdate);
        self::assertSame($birthdate, $this->object->getBirthdate());
    }

    /** @throws ExpectationFailedException */
    public function testSetGetEmail(): void
    {
        self::assertNull($this->object->getEmail());

        $email = 'test@test.de';

        $this->object->setEmail($email);
        self::assertSame($email, $this->object->getEmail());
    }

    /** @throws ExpectationFailedException */
    public function testSetGetPhonenumber(): void
    {
        self::assertNull($this->object->getPhonenumber());

        $phonenumber = '+49 1234 56789';

        $this->object->setPhonenumber($phonenumber);
        self::assertSame($phonenumber, $this->object->getPhonenumber());
    }

    /** @throws ExpectationFailedException */
    public function testSetGetProfession(): void
    {
        self::assertNull($this->object->getProfession());

        $profession = 'Tester';

        $this->object->setProfession($profession);
        self::assertSame($profession, $this->object->getProfession());
    }

    /** @throws Exception */
    public function testToArray(): void
    {
        $id          = 1;
        $salutation  = 'xyz';
        $firstname   = 'testvorname';
        $familyname  = 'testnachname';
        $street      = 'teststrasse';
        $housenumber = '1a';
        $postalcode  = '01234';
        $city        = 'testStadt';
        $birthdate   = new DateTimeImmutable();
        $email       = 'test@test.de';
        $phonenumber = '+49 1234 56789';
        $profession  = 'Tester';

        $this->object->setContactId($id);
        $this->object->setSalutation($salutation);
        $this->object->setFirstname($firstname);
        $this->object->setFamilyname($familyname);
        $this->object->setStreet($street);
        $this->object->setHousenumber($housenumber);
        $this->object->setPostalcode($postalcode);
        $this->object->setCity($city);
        $this->object->setBirthdate($birthdate);
        $this->object->setEmail($email);
        $this->object->setPhonenumber($phonenumber);
        $this->object->setProfession($profession);

        $expected = [
            'birthdate' => $birthdate->format('Y-m-d'),
            'city' => $city,
            'contactId' => $id,
            'email' => $email,
            'familyname' => $familyname,
            'firstname' => $firstname,
            'housenumber' => $housenumber,
            'phonenumber' => $phonenumber,
            'postalcode' => $postalcode,
            'profession' => $profession,
            'salutation' => $salutation,
            'street' => $street,
        ];

        self::assertSame($expected, $this->object->toArray());
    }
}
