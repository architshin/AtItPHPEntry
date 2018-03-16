<?php
class InvokeController
{
	//コンストラクタで受け取った値を格納するプロパティ。
	private $num = 1;

	//コンストラクタ。
	public function __construct(int $num)
	{
		//引数として受け取った値をプロパティに格納。
		$this->num = $num;
	}

	public function __invoke(int $item): void
	{
		$ans = $item * $this->num;
		print($this->num."倍した値: ".$ans."<br>");
	
	}
}
