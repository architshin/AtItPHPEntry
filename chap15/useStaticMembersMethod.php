<?php
require_once("StaticMembers.php");

$ans = StaticMembers::getRandNum(20);
print("1回目の結果: ".$ans."(プロパティの値".StaticMembers::$stNum.")");
$ans = StaticMembers::getRandNum(15);
print("<br>2回目の結果: ".$ans."(プロパティの値".StaticMembers::$stNum.")");
