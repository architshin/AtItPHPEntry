<?php
$params = ["  齊藤 ", "  新三 ", " プログラマ  "];
print("<pre>");
var_dump($params);
print("</pre>");
$trimedParams = array_map("trim", $params);
print("<pre>");
var_dump($trimedParams);
print("</pre>");
