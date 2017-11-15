<?php
class TestScoreWithMethod2
{
	public $name = "";
	public $math = 0;
	public $english = 0;
	public $japanese = 0;

	function calcSum(): int
	{
		$sum = $this->math + $this->english + $this->japanese;
		return $sum;
	}

	function calcAve(): float
	{
		$sum = $this->calcSum();
		$ave = $sum / 3;
		return $ave;
	}
	
	function printScore()
	{
		$sum = $this->calcSum();
		$ave = $this->calcAve();
		print($this->name."さんの合計: ".$sum." 平均: ".$ave."<br>");
	}
}
