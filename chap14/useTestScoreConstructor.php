<?php
require_once("TestScoreConstructor.php");

//たろうさん用のTestScoreConstructorインスタンスを生成。この時にデータを渡す。
$taro = new TestScoreConstructor("たろう", 87, 92, 74);
//データ表示処理。
$taro->printScore();
