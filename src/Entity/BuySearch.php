<?php


namespace App\Entity;


class BuySearch
{
    /*
 * @var int|null*/
private $maxPrice;
/*
 * @var int|null*/
private $minSurface ;

    /**
     * @return mixed
     */
    public function getMaxPrice()
    {
        return $this->maxPrice;
    }

    /**
     * @param mixed $maxPrice
     */
    public function setMaxPrice(int $maxPrice): void
    {
        $this->maxPrice = $maxPrice;
    }

    /**
     * @return mixed
     */
    public function getMinSurface()
    {
        return $this->minSurface;
    }

    /**
     * @param mixed $minSurface
     */
    public function setMinSurface(int $minSurface): void
    {
        $this->minSurface = $minSurface;
    }

}