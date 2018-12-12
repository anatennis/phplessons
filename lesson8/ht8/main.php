<?php

include_once "Good.php";
include_once "Order.php";

$g1 = new Good();
$g2 = new Good();
$g1->setName("Shirt");
$g1->setPrice(300);
$g2->setName("T-shirt");
$g2->setPrice(500);

$order = new Order();
$order->setNumber(1);

$order->AddGood($g1, 1);
$order->AddGood($g2, 2);

var_dump($order->getGoods());
//$order->deleteGood($g1);  не работает
//var_dump($order->getGoods());
//$order->deleteGood($g2);
//var_dump($order->getGoods());

