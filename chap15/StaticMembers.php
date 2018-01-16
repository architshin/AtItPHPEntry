<?php
class StaticMembers
{
	//staticプロパティ
	public static $stNum = 0;
	//通常のプロパティ
	public $num = 0;

	//それぞれのプロパティに引数の数値を加算するメソッド。
	public function countUp(int $plus):void
	{
		//staticプロパティに加算。
		self::$stNum += $plus;
		//通常プロパティに加算。
		$this->num += $plus;
	}
}
