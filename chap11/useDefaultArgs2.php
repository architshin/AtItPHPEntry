<?php
function concatenate(string $firstName, string $lastName, string $space = ""): string
{
	return $lastName.$space.$firstName;
}

$lName = "齊藤";
$fName = "新三";
$name1 = concatenate($fName, $lName, " ");
print("半角スペースで結合: ".$name1);
$name2 = concatenate($fName, $lName);
print("<br>スペースなしで結合: ".$name2);
