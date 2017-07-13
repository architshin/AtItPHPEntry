<?php
function multiplyArray($array)
{
	$num = 1;
	foreach($array as $value) {
		$num *= $value;
	}
	return $num;
}

$list = [5, 4, 8, 6, 2, 9];
$result = multiplyArray($list);
print("配列の計算結果: ".$result);
