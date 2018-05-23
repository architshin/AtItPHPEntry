<?php
class BaseballPlayer extends SportsPlayer
{
	use HitTrait, ThrowTrait;

	//バットを表すフィールド。
	private $bat;
	//グローブを表すフィールド。
	private $glove;
}
