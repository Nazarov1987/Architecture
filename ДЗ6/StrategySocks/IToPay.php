<?php


interface IToPay
{
	public function payOrder(int $priceOder, $number);
}