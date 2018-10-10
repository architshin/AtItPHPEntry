<?php
//オリジナルのオートロード関数。
function myAutoload(string $classname): void
{
	//クラス名を\で分割した配列を作成。
	$classNameArray = explode("\\", $classname);
	//ファイルパス用文字列変数を用意。
	$filepath = "";
	//分割されたクラス名配列をループさせながらファイルパスを生成。
	for($i = 1; $i < count($classNameArray); $i++) {
		$filepath .= "/".$classNameArray[$i];
	}
	//ファイルパスの前にドキュメントルートのパス、後に拡張子を追加。
	$filepath = $_SERVER["DOCUMENT_ROOT"].$filepath.".php";
	//ファイルパスの先が正常ファイルかどうかを判定。
	if(is_file($filepath)) {
		//正常パスなら読込。
		require_once($filepath);
	}
}

//オートロード関数を登録。
spl_autoload_register("myAutoload");
