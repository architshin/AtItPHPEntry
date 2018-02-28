<?php
class SetMagicMethods
{
	private $num;

	public function __set($name, $value)
	{
		if($name == "num") {
			$this->num = $value;
			print("マジックメソッドでプロパティにセットしました<br>");
		} else {
			print("存在しないプロパティです<br>");
		}
	}
}
