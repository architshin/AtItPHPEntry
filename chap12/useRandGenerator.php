<?php
function randGenerator($count) {
	for($i = 1; $i <= $count; $i++) {
		yield rand(1, 10);
	}
}

$sum = 0;
foreach(randGenerator(20) as $value) {
	print("現在の乱数: ".$value."<br>");
	$sum += $value;
}
print("乱数の合計: ".$sum);
