<?php
class SportsPlayer
{
	//名前のプロパティ。
	protected $name;
	//コンストラクタ。名前プロパティに値をセットする。
	public function __construct(string $name)
	{
		$this->name = $name;
	}
}
