<?php
function concatenateSpace($firstName, $lastName)
{
	return $lastName." ".$firstName;
}

function useConcatenate($name, $func)
{
	$concatName = $func(...$name);
	print($func."関数での結合結果: ".$concatName."<br>");
}

$nameParam = ["新三", "齊藤"];
useConcatenate($nameParam, "concatenateSpace");
