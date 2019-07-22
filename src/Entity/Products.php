<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Products
 *
 * @ORM\Table(name="products")
 * @ORM\Entity
 */
class Products
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
     * @var string|null
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $title = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="offer", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $offer = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="price_offer", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $priceOffer = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fake_price", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $fakePrice = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="img", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $img = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="offer_popularity", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $offerPopularity = 'NULL';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getOffer(): ?int
    {
        return $this->offer;
    }

    public function setOffer(?int $offer): self
    {
        $this->offer = $offer;

        return $this;
    }

    public function getPriceOffer(): ?int
    {
        return $this->priceOffer;
    }

    public function setPriceOffer(?int $priceOffer): self
    {
        $this->priceOffer = $priceOffer;

        return $this;
    }

    public function getFakePrice(): ?int
    {
        return $this->fakePrice;
    }

    public function setFakePrice(?int $fakePrice): self
    {
        $this->fakePrice = $fakePrice;

        return $this;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(?string $img): self
    {
        $this->img = $img;

        return $this;
    }

    public function getOfferPopularity(): ?int
    {
        return $this->offerPopularity;
    }

    public function setOfferPopularity(?int $offerPopularity): self
    {
        $this->offerPopularity = $offerPopularity;

        return $this;
    }


}
