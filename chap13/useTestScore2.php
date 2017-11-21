<?php
require_once("TestScore.php");

function printScore(TestScore $student): void
{
	$sum = $student->math + $student->english + $student->japanese;
	$ave = $sum / 3;
	print($student->name."さんの合計: ".$sum." 平均: ".$ave."<br>");
}

$taro = new TestScore();
$taro->name = "たろう";
$taro->math = 87;
$taro->english = 92;
$taro->japanese = 74;
printScore($taro);

$hanako = new TestScore();
$hanako->name = "はなこ";
$hanako->math = 95;
$hanako->english = 79;
$hanako->japanese = 83;
printScore($hanako);
