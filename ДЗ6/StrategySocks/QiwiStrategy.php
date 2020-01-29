<?php
class QiwiStrategy implements IToPay
{
public function payOrder(int $priceOder, $number)
{
echo 'Произведена оплата заказа с помощью Qiwi. Цена заказа составила ' . $priceOder . '. Подтверждение заказа по номеру '
. $number;
return $priceOder;
}

}