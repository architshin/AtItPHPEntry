<?php
class Goods
{
	//商品名プロパティ。
	private $name = "";
	//商品価格プロパティ。
	private $price = 0;
	//商品名と商品価格を設定するメソッド。
	public function setData(string $name, int $price): void
	{
		$this->name = $name;
		$this->price = $price;
	}
	//商品名と価格を表示するメソッド。
	public function printPrice(): void
	{
		print($this->name."の価格: ￥".$this->price."<br>");
	}
	//商品名のゲッタ。
	public function getName(): string
	{
		return $this->name;
	}
	//商品価格のゲッタ。
	public function getPrice(): int
	{
		return $this->price;
	}
}
