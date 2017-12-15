<?php
require_once("PrivateProperties.php");

$privateP = new PrivateProperties();
$privateP->setNum(35);
$ans = $privateP->getNum();
print("privateP内のnumの値: ".$ans);
$privateP->num = 56;
