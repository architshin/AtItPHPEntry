<?php
require_once("Goods.php");
require_once("GoodsWithTax2.php");

$goods = new GoodsWithTax2();
$goods->setData("リップクリーム", 200);
$goods->printPrice();
