<?php
function multiplyArray()
{
	$num = 1;
	foreach($list as $value) {
		$num *= $value;
	}
	return $num;
}

$list = [5, 4, 8, 6, 2, 9];
$ans = multiplyArray();
print("配列の計算結果: ".$ans);
