<?php
function yieldValues()
{
	$num = 8;
	$ans = $num * 3;
	yield $ans;
	$ans = $num * 5;
	yield $ans;
	$ans = $num * 7;
	yield $ans;
}

$ans = yieldValues();
foreach($ans as $value) {
	print($value."<br>");
}
