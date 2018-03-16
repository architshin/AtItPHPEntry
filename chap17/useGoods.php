<?php
require_once("Goods.php");
require_once("GoodsWithTax.php");

$goods = new Goods();
$goods->setData("ハンドクリーム", 350);
$goods->printPrice();

$goodsWithTax = new GoodsWithTax();
$goodsWithTax->setData("日焼け止め", 500);
$goodsWithTax->printPrice();
