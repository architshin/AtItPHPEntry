<?php
require_once("StaticMembers.php");

//StaticMembersインスタンスを2コ作成。
$staticA = new StaticMembers();
$staticB = new StaticMembers();

//AのcountUp()を引数10で実行。
$staticA->countUp(10);
//Aのプロパティをそれぞれ出力。
print("staticAのstNum: ".$staticA::$stNum." num: ".$staticA->num);
//BのcountUp()を引数5で実行。
$staticB->countUp(5);
//Bのプロパティをそれぞれ出力。
print("<br>staticBのstNum: ".$staticB::$stNum." num: ".$staticB->num);
//StaticMembersのstaticプロパティのみ出力。
print("<br>stNum: ".StaticMembers::$stNum);
