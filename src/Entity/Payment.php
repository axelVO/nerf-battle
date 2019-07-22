<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Payment
 *
 * @ORM\Table(name="payment", indexes={@ORM\Index(name="id_product", columns={"id_product"}), @ORM\Index(name="if_form", columns={"id_form"})})
 * @ORM\Entity
 */
class Payment
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
     * @var \FormData
     *
     * @ORM\ManyToOne(targetEntity="FormData")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_form", referencedColumnName="id")
     * })
     */
    private $idForm;

    /**
     * @var \Products
     *
     * @ORM\ManyToOne(targetEntity="Products")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_product", referencedColumnName="id")
     * })
     */
    private $idProduct;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdForm(): ?FormData
    {
        return $this->idForm;
    }

    public function setIdForm(?FormData $idForm): self
    {
        $this->idForm = $idForm;

        return $this;
    }

    public function getIdProduct(): ?Products
    {
        return $this->idProduct;
    }

    public function setIdProduct(?Products $idProduct): self
    {
        $this->idProduct = $idProduct;

        return $this;
    }


}
