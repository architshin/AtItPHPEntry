<?php
$lName = "齊藤";
$fName = "新三";

$concat1 = function(string $firstName, string $lastName): string
{
		return $lastName." ".$firstName;
};

$concatName1 = $concat1($fName, $lName);
print("無名関数の変数を使っての結合結果: ".$concatName1."<br>");

$concat2 = function() use ($fName, $lName): string
{
		return $lName." ".$fName;
};

$concatName2 = $concat2();
print("無名関数とuseを使っての結合結果: ".$concatName2."<br>");
