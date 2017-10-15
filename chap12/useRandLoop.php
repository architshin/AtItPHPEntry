<?php
function createRandArray(int $count): array
{
	$array = [];
	for($i = 1; $i <= $count; $i++) {
		$array[] = rand(1, 10);
	}
	return $array;
}

$sum = 0;
foreach(createRandArray(10) as $value) {
	print("現在の乱数: ".$value."<br>");
	$sum += $value;
}
print("乱数の合計: ".$sum);
