<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FormDataAdress
 *
 * @ORM\Table(name="form_data_adress", indexes={@ORM\Index(name="FK_form_data_adress_form_data", columns={"id"})})
 * @ORM\Entity
 */
class FormDataAdress
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="first_name", type="string", length=255, nullable=true, options={"default"="'0'"})
     */
    private $firstName = '\'0\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="last_name", type="string", length=255, nullable=true, options={"default"="'0'"})
     */
    private $lastName = '\'0\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="adress", type="string", length=255, nullable=true, options={"default"="'0'"})
     */
    private $adress = '\'0\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="adress_info", type="string", length=255, nullable=true, options={"default"="'0'"})
     */
    private $adressInfo = '\'0\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="city", type="string", length=255, nullable=true, options={"default"="'0'"})
     */
    private $city = '\'0\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="postal_code", type="string", length=255, nullable=true, options={"default"="'0'"})
     */
    private $postalCode = '\'0\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="location", type="string", length=255, nullable=true, options={"default"="'0'"})
     */
    private $location = '\'0\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone", type="string", length=255, nullable=true, options={"default"="'0'"})
     */
    private $phone = '\'0\'';

    /**
     * @var \FormData
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="FormData")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $id;

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(?string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    public function getAdressInfo(): ?string
    {
        return $this->adressInfo;
    }

    public function setAdressInfo(?string $adressInfo): self
    {
        $this->adressInfo = $adressInfo;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    public function setPostalCode(?string $postalCode): self
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(?string $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getId(): ?FormData
    {
        return $this->id;
    }

    public function setId(?FormData $id): self
    {
        $this->id = $id;

        return $this;
    }


}
