<?php
function multiplyArray($array)
{
	$num = 1;
	foreach($array as $value) {
		$num *= $value;
	}
	return $num;
}

function multiplyArray2($array)
{
	$num = 1;
	foreach($array as $value) {
		$num *= $value;
	}
	print("配列の計算結果: ".$num);
}
