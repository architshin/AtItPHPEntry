<?php
$csvStr = "PHP,Java,Ruby,Python";
$csvArray = str_getcsv($csvStr);
print("<pre>");
var_dump($csvArray);
print("</pre>");
