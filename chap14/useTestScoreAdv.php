<?php
require_once("TestScoreAdv.php");

//たろうさん用のTestScoreAdvを使って、データ表示。
$taro = new TestScoreAdv();
$taro->setData("たろう", 87, 92, 74);
$taro->printScore();

//はなこさん用のTestScoreAdvを使って、データ表示。
$hanako = new TestScoreAdv();
$hanako->setData("はなこ", 95, 79, 83);
$hanako->printScore();

//たろうさんの合計点を取得。
$taroSum = $taro->calcSum();
//はなこさんの合計点を取得。
$hanakoSum = $hanako->calcSum();
//ふたりの合計の平均点を計算し、表示。
$ave2 = ($taroSum + $hanakoSum) / 2;
print("二人の合計の平均: ".$ave2);
//たろうさんの平均点を取得。
$taroAve = $taro->calcAve();
//はなこさんの平均点を取得。
$hanakoAve = $hanako->calcAve();
//ふたりの平均の平均点を計算し、表示。
$aveAve = ($taroAve + $hanakoAve) / 2;
print("<br>二人の平均の平均: ".$aveAve);
