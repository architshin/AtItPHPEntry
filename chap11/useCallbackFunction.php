<?php
function concatenateSpace(string $firstName, string $lastName): string
{
	return $lastName." ".$firstName;
}

function useConcatenate(array $name, callable $func)
{
	$concatName = $func(...$name);
	print($func."関数での結合結果: ".$concatName."<br>");
}

$nameParam = ["新三", "齊藤"];
useConcatenate($nameParam, "concatenateSpace");
