<?php
$num = 3;
while($num <= 100) {
	if($num % 2 == 0) {
		print($num."は素数ではありません<br>");
	} else {
		$i = 3;
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
	}
	$num++;
}
print("素数判定が終了しました。");
