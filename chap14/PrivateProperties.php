<?php
class PrivateProperties
{
	private $num;

	public function setNum(int $num): void
	{
		$this->num = $num;
	}
	
	public function getNum(): int
	{
		return $this->num;
	}
}
