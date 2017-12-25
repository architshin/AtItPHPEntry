<?php
class TestScoreCapsule
{
	private $name = "";
	private $math = 0;
	private $english = 0;
	private $japanese = 0;

	public function setData(string $name, int $math, int $english, int $japanese): void
	{
		$this->name = $name;
		$this->math = $math;
		$this->english = $english;
		$this->japanese = $japanese;
	}

	public function calcSum(): int
	{
		$sum = $this->math + $this->english + $this->japanese;
		return $sum;
	}

	public function calcAve(): float
	{
		$sum = $this->calcSum();
		$ave = $sum / 3;
		return $ave;
	}
	
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
