<?php
require_once("Goods.php");
require_once("GoodsWithTax2.php");

$goods = new GoodsWithTax2("リップクリーム", 200);
$goods->printPrice();
