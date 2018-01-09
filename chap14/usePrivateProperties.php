<?php
require_once("PrivateProperties.php");

//PrivatePropertiesインスタンスを生成。
$privateP = new PrivateProperties();
//セッタを使ってプロパティ$numに35を格納。
$privateP->setNum(35);
//ゲッタを使ってプロパティ$numの値を取得し、$ansに格納。
$ans = $privateP->getNum();
//$ansを表示。
print("privateP内のnumの値: ".$ans);
//プロパティに直接値を代入してみようとする。
$privateP->num = 56;
