<?php
function plus(int $value)
{
	$num = 0;
	$num += $value;
	print("<br>配列の計算結果: ".$num);
}

print("plusを3で呼出");
plus(3);
print("<br>plusを5で呼出");
plus(5);
print("<br>plusを7で呼出");
plus(7);
