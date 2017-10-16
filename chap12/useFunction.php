<?php
function returnValues(): int
{
	$num = 8;
	$ans = $num * 3;
	return $ans;
	$ans = $num * 5;
	return $ans;
	$ans = $num * 7;
	return $ans;
}

$value1 = returnValues();
print("1回目: ".$value1);
$value2 = returnValues();
print("<br>2回目: ".$value2);
$value3 = returnValues();
print("<br>3回目: ".$value3);
