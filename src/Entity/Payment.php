<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Payment
 *
 * @ORM\Table(name="payment", indexes={@ORM\Index(name="id_form", columns={"id_form"}), @ORM\Index(name="id_product", columns={"id_product"})})
 * @ORM\Entity
 */
class Payment
{
    /**
     * @var \FormData
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="FormData")
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
