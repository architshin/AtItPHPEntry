<?php
class Dog extends Animal
{
	//鳴き声を得るメソッド。
	public function call(): string
	{
		return "わんわん";
	}
}
