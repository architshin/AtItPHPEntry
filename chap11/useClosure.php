<?php
function useConcatenate($name, $func)
{
	$concatName = $func(...$name);
	print("無名関数での結合結果: ".$concatName."<br>");
}

$nameParam = ["新三", "齊藤"];
useConcatenate($nameParam, function($firstName, $lastName)
	{
		return $lastName." ".$firstName;
	}
);
