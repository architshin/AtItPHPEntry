<?php
require_once("TestScoreCapsule.php");

$taro = new TestScoreCapsule();
$taro->setData("たろう", 87, 92, 74);
$taro->printScore();
