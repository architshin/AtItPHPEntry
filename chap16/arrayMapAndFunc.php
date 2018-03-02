<?php
$func = function(int $item): void
{
	$ans = $item * 4;
	print("4倍した値: ".$ans."<br>");
};

$list = [1, 3, 5, 7, 9];
array_walk($list, $func);
