<?php
function concatenate($firstName, $lastName, $space = "")
{
	return $lastName.$space.$firstName;
}

$nameParam1 = ["新三", "齊藤", "・"];
$name1 = concatenate(...$nameParam1);
print("・で結合: ".$name1);
$nameParam2 = ["新三", "齊藤"];
$name2 = concatenate(...$nameParam2);
print("<br>空文字で結合: ".$name2);
