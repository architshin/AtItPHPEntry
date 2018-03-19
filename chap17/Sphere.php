<?php
class Sphere extends Circle
{
	//球の表面積を計算するメソッド。
	public function getSurfaceArea(): float
	{
		return 4 * self::PI * $this->radius * $this->radius;
	}
}
