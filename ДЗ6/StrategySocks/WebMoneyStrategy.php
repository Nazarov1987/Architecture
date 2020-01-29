<?php
class WebMoneyStrategy implements IToPay
{
    public function payOrder(int $priceOder, $number)
    {
        echo 'Произведена оплата заказа с помощью WebMoney. Цена заказа составила ' . $priceOder . '. Подтверждение заказа по номеру '
            . $number;
        return $priceOder;
    }

}