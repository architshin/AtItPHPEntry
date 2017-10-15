<?php
function randGenerator($count)
{
	for($i = 1; $i <= $count; $i++) {
		yield $i => rand(1, 10);
	}
}

$sum = 0;
foreach(randGenerator(10) as $num => $value) {
	print($num."個目の乱数: ".$value."<br>");
	$sum += $value;
}
print("乱数の合計: ".$sum);
