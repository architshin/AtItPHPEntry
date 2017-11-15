<?php
require_once("TestScoreWithMethod.php");

$taro = new TestScoreWithMethod();
$taro->name = "たろう";
$taro->math = 87;
$taro->english = 92;
$taro->japanese = 74;
$taro->printScore();

$hanako = new TestScoreWithMethod();
$hanako->name = "はなこ";
$hanako->math = 95;
$hanako->english = 79;
$hanako->japanese = 83;
$hanako->printScore();
