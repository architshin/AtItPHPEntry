<?php
$str = "6";
$num1 = +$str;  // (1)
$num2 = 5;

$ans1 = -$num1;  // (2)
$ans2 = $num1 % $num2;  // (3)
$ans3 = $num1 ** $num2;  // (4)

var_dump($num1);  // (5)
print("<br>ans1=".$ans1."<br>");
print("ans2=".$ans2."<br>");
print("ans3=".$ans3."<br>");
