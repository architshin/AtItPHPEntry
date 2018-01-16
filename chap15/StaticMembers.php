<?php
class StaticMembers
{
	//staticプロパティ。
	public static $stNum = 0;
	//通常のプロパティ。
	public $num = 0;

	//それぞれのプロパティに引数の数値を加算するメソッド。
	public function countUp(int $plus):void
	{
		//staticプロパティに加算。
		self::$stNum += $plus;
		//通常プロパティに加算。
		$this->num += $plus;
	}

	//引数と乱数をもとに数値を生成するメソッド。
	public static function getRandNum(int $init): int
	{
		//非staticプロパティに加算。
		// $this->num += $init;
		//staticプロパティに引数を加算。
		self::$stNum += $init;
		//1～100の乱数を発生。
		$rand = rand(1, 100);
		//乱数とプロパティを掛け合わせ、その値を戻り値とする。
		$ans = $rand * self::$stNum;
		return $ans;
	}
}
