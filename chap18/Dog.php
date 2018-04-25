<?php
class Dog extends AbstractAnimal
{
	//鳴き声を得るメソッド。
	public function call(): string
	{
		return "わんわん";
	}
}
