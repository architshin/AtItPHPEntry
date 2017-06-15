<?php
for($num = 3; $num <= 100; $num++) {
	if($num % 2 == 0) {
		print($num."は素数ではありません<br>");
		continue;
	}
	for($i = 3; $i < $num; $i++) {
		if ($num % $i == 0) {
			print($num."は素数ではありません<br>");
			break;
		}
	}
	if($i == $num) {
		print($num."は素数です。<br>");
	}
}
print("素数判定が終了しました。");
