<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Payment
 *
<<<<<<< HEAD
 * @ORM\Table(name="payment", indexes={@ORM\Index(name="id_product", columns={"id_product"}), @ORM\Index(name="if_form", columns={"id_form"})})
=======
 * @ORM\Table(name="payment", indexes={@ORM\Index(name="id_form", columns={"id_form"}), @ORM\Index(name="id_product", columns={"id_product"})})
>>>>>>> a9cdfd9a4a0d54004b7d9c9e61c0f47d58d0f5a3
 * @ORM\Entity
 */
class Payment
{
    /**
<<<<<<< HEAD
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
=======
     * @var \FormData
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="FormData")
>>>>>>> a9cdfd9a4a0d54004b7d9c9e61c0f47d58d0f5a3
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

<<<<<<< HEAD
    public function getId(): ?int
    {
        return $this->id;
    }

=======
>>>>>>> a9cdfd9a4a0d54004b7d9c9e61c0f47d58d0f5a3
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
