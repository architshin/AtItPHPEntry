<?php
class TestScoreWithMethod
{
	public $name = "";
	public $math = 0;
	public $english = 0;
	public $japanese = 0;

	public function printScore()
	{
		$sum = $this->math + $this->english + $this->japanese;
		$ave = $sum / 3;
		print($this->name."さんの合計: ".$sum." 平均: ".$ave."<br>");
	}
}
