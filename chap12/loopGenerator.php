<?php
function yieldArrayElement() {
	$array = [1, 3, 5, 7];
	yield $array[0];
	yield $array[1];
	yield $array[2];
	yield $array[3];
}

foreach(yieldArrayElement() as $value) {
	$ans = $value * 8;
	print($ans."<br>");
}
