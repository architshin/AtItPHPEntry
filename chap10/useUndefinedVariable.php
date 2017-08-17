<?php
function multiplyArray(array $array)
{
	$num = 1;
	foreach($array as $value) {
		$num *= $value;
	}
}

$list = [5, 4, 8, 6, 2, 9];
multiplyArray($list);
print("配列の計算結果: ".$num);
