<?php
class GoodsWithTax2 extends Goods
{
	//商品名と価格を表示するメソッド。税込みで表示するように変更。
	public function printPrice(): void
	{
		//親クラスの同名メソッドの呼び出し。
		parent::printPrice();
		//商品価格の税込み価格を計算し、表示。
		$priceWithTax = round($this->getPrice() * 1.08);
		print($this->getName()."の税込み価格: ￥".$priceWithTax."<br>");
	}
}
