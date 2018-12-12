<?php


class Good
{
    protected $name;
    protected $price;

    public function __construct()
    {
        $this->name = "noname";
        $this->price = 0;
    }

    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

}