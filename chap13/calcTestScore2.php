<?php
function printScore(string $name, int $math, int $english, int $japanese)
{
	$sum = $math + $english + $japanese;
	$ave = $sum / 3;
	print($name."さんの合計: ".$sum." 平均: ".$ave."<br>");
}

$taroName = "たろう";
$taroMath = 87;
$taroEnglish = 92;
$taroJapanese = 74;
printScore($taroName, $taroMath, $taroEnglish,$taroJapanese);

$hanakoName = "はなこ";
$hanakoMath = 95;
$hanakoEnglish = 79;
$hanakoJapanese = 83;
printScore($hanakoName, $hanakoMath, $hanakoEnglish, $hanakoJapanese);
