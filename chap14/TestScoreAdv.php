<?php
class TestScoreAdv
{
	public $name = "";
	public $math = 0;
	public $english = 0;
	public $japanese = 0;

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
}
