<?php
class TestScoreCapsule
{
	//名前プロパティ。
	private $name = "";
	//数学点数プロパティ。
	private $math = 0;
	//英語点数プロパティ。
	private $english = 0;
	//国語点数プロパティ。
	private $japanese = 0;

	//全データを受け取ってプロパティに格納するメソッド。
	public function setData(string $name, int $math, int $english, int $japanese): void
	{
		$this->name = $name;
		$this->math = $math;
		$this->english = $english;
		$this->japanese = $japanese;
	}

	//合計点を計算するメソッド。
	public function calcSum(): int
	{
		$sum = $this->math + $this->english + $this->japanese;
		return $sum;
	}

	//平均点を計算するメソッド。
	public function calcAve(): float
	{
		$sum = $this->calcSum();
		$ave = $sum / 3;
		return $ave;
	}
	
	//名前、合計、平均を表示するメソッド。
	public function printScore(): void
	{
		$sum = $this->calcSum();
		$ave = $this->calcAve();
		print($this->name."さんの合計: ".$sum." 平均: ".$ave."<br>");
	}

	//以下、アクセサメソッド。
	public function setName(string $name): void
	{
		$this->name = $name;
	}
	public function getName(): string
	{
		return $this->name;
	}
	public function setMath(int $math): void
	{
		$this->math = $math;
	}
	public function getMath(): int
	{
		return $this->math;
	}
	public function setEnglish(int $english): void
	{
		$this->english = $english;
	}
	public function getEnglish(): int
	{
		return $this->english;
	}
	public function setJapanese(int $japanese): void
	{
		$this->japanese = $japanese;
	}
	public function getJapanese(): int
	{
		return $this->japanese;
	}
}
