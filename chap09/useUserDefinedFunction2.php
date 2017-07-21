<?php
function multiplyArray2(array $array)
{
	$num = 1;
	foreach($array as $value) {
		$num *= $value;
	}
	print("配列の計算結果: ".$num);
}

$list = [5, 4, 8, 6, 2, 9];
multiplyArray2($list);
