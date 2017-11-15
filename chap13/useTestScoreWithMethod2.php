<?php
require_once("TestScoreWithMethod2.php");

$taro = new TestScoreWithMethod2();
$taro->name = "たろう";
$taro->math = 87;
$taro->english = 92;
$taro->japanese = 74;
$taro->printScore();

$hanako = new TestScoreWithMethod2();
$hanako->name = "はなこ";
$hanako->math = 95;
$hanako->english = 79;
$hanako->japanese = 83;
$hanako->printScore();

$taroSum = $taro->calcSum();
$hanakoSum = $hanako->calcSum();
$ave2 = ($taroSum + $hanakoSum) / 2;
print("二人の合計の平均: ".$ave2);
$taroAve = $taro->calcAve();
$hanakoAve = $hanako->calcAve();
$aveAve = ($taroAve + $hanakoAve) / 2;
print("<br>二人の平均の平均: ".$aveAve);