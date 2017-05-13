<?php
$colors = array(
	"magenta" => array(
		"red" => 255,
		"green" => 0,
		"blue" => 255,
	),
	"black" => array(
		"red" => 0,
		"green" => 0,
		"blue" => 0,
	),
); // (1)

print("<pre>");
var_dump($colors);
print("</pre>");

$oneElement = $colors["magenta"]["blue"];  // (2)
print("要素ひとつだけ表示: ".$oneElement);
