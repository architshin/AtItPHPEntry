<?php
function concatenateSpace(string $firstName, string $lastName): string
{
	return $lastName." ".$firstName;
}

function concatenateDot(string $firstName, string $lastName): string
{
	return $lastName."・".$firstName;
}

$lName = "齊藤";
$fName = "新三";
$funcNameList = ["concatenateSpace", "concatenateDot"];
foreach($funcNameList as $funcName) {
	$name = $funcName($fName, $lName);
	print($funcName."関数での結合結果: ".$name."<br>");
}
