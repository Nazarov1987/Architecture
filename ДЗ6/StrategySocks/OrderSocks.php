<?php

class OrderSocks
{
    public function toPay(IToPay $strategy, array $count): int
    {
        $price = (new Socks()) -> getPrice();
        $priceOder = $price * count($count);
        $number = mt_rand(89000000000,89999999999);
        return $strategy->payOrder($priceOder, $number);
    }
}
