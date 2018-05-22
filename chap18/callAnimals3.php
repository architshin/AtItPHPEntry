<?php
require_once("AnimalInterface.php");

function invokeAnimal(AnimalInterface $animal) {
	print($animal->getName()."の鳴き声は".$animal->call()."<br>");
}

invokeAnimal(
	new class implements AnimalInterface
	{
		public function getName(): string
		{
			return "名無しさん";
		}
	
		public function call(): string
		{
			return "どんな鳴き声なんだろう";
		}
	
		public function eat(): void
		{
			print("とりあえず食べてみよう!");
		}
	}
);
