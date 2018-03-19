<?php
class Circle
{
	//πを表す定数。
	const PI = 3.14;
	//半径を表すプロパティ。
	protected $radius = 0;
	//コンストラクタ。半径を引数でもらう。
	public function __construct(int $radius)
	{
		$this->radius = $radius;
	}
	//円周を得るメソッド。
	public function getCircuit(): float
	{
		return 2 * self::PI * $this->radius;
	}
	//円の面積を得るメソッド。
	public function getArea(): float
	{
		return self::PI * $this->radius * $this->radius;
	}
}
