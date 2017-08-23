<?php
function recursivePlus(int $value)
{
	static $count = 10;
	$num = $value + $count;
	print("<br>計算結果: ".$num);
	print("<br>countの値: ".$count);
	$count--;
	if($count != 0) {
		recursivePlus($num);
	}
}

print("recursivePlusを実行");
recursivePlus(3);
