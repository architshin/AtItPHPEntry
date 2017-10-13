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

$ans1 = returnValues();
print("1回目: ".$ans1);
$ans2 = returnValues();
print("<br>2回目: ".$ans2);
$ans3 = returnValues();
print("<br>3回目: ".$ans3);
