<?php
function yieldArrayElement()
{
	$array = [1, 3, 5, 7];
	foreach($array as $element) {
		yield $element;
	}
}

foreach(yieldArrayElement() as $value) {
	$ans = $value * 8;
	print($ans."<br>");
}
