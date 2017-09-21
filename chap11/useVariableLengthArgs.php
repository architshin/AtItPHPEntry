<?php
function concatenate(string ...$name): string
{
	$concatenatedName = "";
	for($i = 0; $i < count($name); $i++) {
		$concatenatedName .= $name[$i];
		if($i != count($name) - 1) {
			$concatenatedName .= "・";
		}
	}
	return $concatenatedName;
}

$lName = "齊藤";
$fName = "新三";
$name1 = concatenate($fName, $lName);
print("結合結果: ".$name1);
$picasso = concatenate("パブロ", "ディエゴ", "ホセ", "フランシスコ", "デ", "パウラ", "ファン", "ネポムセーノ", "マリア", "デ", "ロス", "レメディオス", "シプリアノ", "デ", "ラ", "サンティシマ", "トリニダード", "ルイス", "ピカソ");
print("<br>ピカソの本名: ".$picasso);
