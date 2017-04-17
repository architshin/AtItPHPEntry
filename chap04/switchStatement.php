<?php
$foo = rand(1, 10);
switch($foo) {
	case 1:
		print("優です<br>");
		break;
	case 2:
		print("良です<br>");
		break;
	case 3:
		print("可です<br>");
		break;
	default:
		print("不可です<br>");
		break;
}
print("fooの値は{$foo}でした");
