<?php
require_once("TestScoreAdv.php");

$taro = new TestScoreAdv();
$taro->setData("たろう", 87, 92, 74);
$taro->printScore();

$hanako = new TestScoreAdv();
$hanako->setData("はなこ", 95, 79, 83);
$hanako->printScore();

$taroSum = $taro->calcSum();
$hanakoSum = $hanako->calcSum();
$ave2 = ($taroSum + $hanakoSum) / 2;
print("二人の合計の平均: ".$ave2);
$taroAve = $taro->calcAve();
$hanakoAve = $hanako->calcAve();
$aveAve = ($taroAve + $hanakoAve) / 2;
print("<br>二人の平均の平均: ".$aveAve);