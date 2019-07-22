<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FormData
 *
 * @ORM\Table(name="form_data")
 * @ORM\Entity
 */
class FormData
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
<<<<<<< HEAD
     * @ORM\Column(name="first_name", type="string", length=255, nullable=false)
     */
    private $firstName = '0';
=======
     * @ORM\Column(name="first_name", type="string", length=255, nullable=false, options={"default"="'0'"})
     */
    private $firstName = '\'0\'';
>>>>>>> a9cdfd9a4a0d54004b7d9c9e61c0f47d58d0f5a3

    /**
     * @var string
     *
<<<<<<< HEAD
     * @ORM\Column(name="last_name", type="string", length=255, nullable=false)
     */
    private $lastName = '0';
=======
     * @ORM\Column(name="last_name", type="string", length=255, nullable=false, options={"default"="'0'"})
     */
    private $lastName = '\'0\'';
>>>>>>> a9cdfd9a4a0d54004b7d9c9e61c0f47d58d0f5a3

    /**
     * @var string
     *
<<<<<<< HEAD
     * @ORM\Column(name="adress", type="string", length=255, nullable=false)
     */
    private $adress = '0';
=======
     * @ORM\Column(name="adress", type="string", length=255, nullable=false, options={"default"="'0'"})
     */
    private $adress = '\'0\'';
>>>>>>> a9cdfd9a4a0d54004b7d9c9e61c0f47d58d0f5a3

    /**
     * @var string
     *
<<<<<<< HEAD
     * @ORM\Column(name="adress_info", type="string", length=255, nullable=false)
     */
    private $adressInfo = '0';
=======
     * @ORM\Column(name="adress_info", type="string", length=255, nullable=false, options={"default"="'0'"})
     */
    private $adressInfo = '\'0\'';
>>>>>>> a9cdfd9a4a0d54004b7d9c9e61c0f47d58d0f5a3

    /**
     * @var string
     *
<<<<<<< HEAD
     * @ORM\Column(name="city", type="string", length=255, nullable=false)
     */
    private $city = '0';
=======
     * @ORM\Column(name="city", type="string", length=255, nullable=false, options={"default"="'0'"})
     */
    private $city = '\'0\'';
>>>>>>> a9cdfd9a4a0d54004b7d9c9e61c0f47d58d0f5a3

    /**
     * @var string
     *
<<<<<<< HEAD
     * @ORM\Column(name="postal_code", type="string", length=255, nullable=false)
     */
    private $postalCode = '0';
=======
     * @ORM\Column(name="postal_code", type="string", length=255, nullable=false, options={"default"="'0'"})
     */
    private $postalCode = '\'0\'';
>>>>>>> a9cdfd9a4a0d54004b7d9c9e61c0f47d58d0f5a3

    /**
     * @var string
     *
<<<<<<< HEAD
     * @ORM\Column(name="location", type="string", length=255, nullable=false)
     */
    private $location = '0';
=======
     * @ORM\Column(name="location", type="string", length=255, nullable=false, options={"default"="'0'"})
     */
    private $location = '\'0\'';
>>>>>>> a9cdfd9a4a0d54004b7d9c9e61c0f47d58d0f5a3

    /**
     * @var string
     *
<<<<<<< HEAD
     * @ORM\Column(name="phone", type="string", length=255, nullable=false)
     */
    private $phone = '0';
=======
     * @ORM\Column(name="phone", type="string", length=255, nullable=false, options={"default"="'0'"})
     */
    private $phone = '\'0\'';
>>>>>>> a9cdfd9a4a0d54004b7d9c9e61c0f47d58d0f5a3

    /**
     * @var string
     *
<<<<<<< HEAD
     * @ORM\Column(name="mail", type="string", length=255, nullable=false)
     */
    private $mail = '0';
=======
     * @ORM\Column(name="mail", type="string", length=255, nullable=false, options={"default"="'0'"})
     */
    private $mail = '\'0\'';
>>>>>>> a9cdfd9a4a0d54004b7d9c9e61c0f47d58d0f5a3

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    public function getAdressInfo(): ?string
    {
        return $this->adressInfo;
    }

    public function setAdressInfo(string $adressInfo): self
    {
        $this->adressInfo = $adressInfo;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    public function setPostalCode(string $postalCode): self
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }


}
