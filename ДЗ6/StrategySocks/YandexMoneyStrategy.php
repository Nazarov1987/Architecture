<?php


class YandexMoneyStrategy implements IToPay
{
    public function payOrder(int $priceOder, $number)
    {
        echo 'Произведена оплата заказа с помощью YandexMoney. Цена заказа составила ' . $priceOder . '. Подтверждение заказа по номеру '
            . $number;
        return $priceOder;
    }

}