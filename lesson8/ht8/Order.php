<?php

class Order
{
    private $number;
    private $goods;

    public function __construct()
    {
        $this->number = 0;
        $this->goods = [];
    }

    public function getNumber(): int
    {
        return $this->number;
    }

    public function setNumber(int $number)
    {
        $this->number = $number;
    }

//    public function AddGood($good) {
//        array_push($this->goods, $good);
//    }

    public function AddGood($key, $value) {
        $g = [
                "good" => $key,
                "count" => $value
        ];

        array_push($this->goods, $g);
    }

    public function getGoods() {
        return $this->goods;
    }

    public function deleteGood(Good $g) {
        foreach ($this->goods as $goods) {
            if ($goods['good']->getName() == $g->getName()) {
                 if ($goods['count']==1) {
                    unset($goods);
                    } else {
                    $goods['count']-=1;
                     }
        }
    }
    }

}