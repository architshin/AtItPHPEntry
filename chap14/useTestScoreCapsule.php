<?php
require_once("TestScoreCapsule.php");

//たろうさん用のTestScoreCapsuleを使って、データ表示。
$taro = new TestScoreCapsule();
$taro->setData("たろう", 87, 92, 74);
$taro->printScore();
