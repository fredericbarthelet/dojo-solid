<?php

class Screwdriver
{
    /** @var string */
    private $title;

    /** @var float */
    private $price;

    /** @var string */
    private $shape;

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    public function getShape()
    {
        return $this->shape;
    }

    public function setShape($shape)
    {
        $this->shape = $shape;
        return $this;
    }


}
