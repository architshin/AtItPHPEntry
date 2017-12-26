<?php
class PrivateProperties
{
	//数値プロパティ。
	private $num;

	//プロパティ$numに値を格納するメソッド。
	public function setNum(int $num): void
	{
		$this->num = $num;
	}
	
	//プロパティ$numの値を取得するメソッド。
	public function getNum(): int
	{
		return $this->num;
	}
}
