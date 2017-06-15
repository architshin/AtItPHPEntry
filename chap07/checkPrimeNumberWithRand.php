<?php
$num = rand(2, 20);
$i = 2;
while($i < $num) {
	if ($num % $i == 0) {
		print($num."は素数ではありません<br>");
		break;
	}
	$i++;
}
if($i == $num) {
	print($num."は素数です。<br>");
}
print("素数判定が終了しました。");
