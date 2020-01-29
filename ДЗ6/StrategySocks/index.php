<?php
spl_autoload_register(function ($class) {
	include $class.'.php';
});

function testStrategy (array $count) {
	$order = new OrderSocks();

	//покупка с помощью Qiwi
	$toBuyQiwi = $order->toPay(new QiwiStrategy(),$count);
    $toBuyYandexMoney = $order->toPay(new YandexMoneyStrategy(),$count);
    $toBuyWebMoney = $order->toPay(new WebMoneyStrategy(),$count);
	//стратегия по колву-комментариев
}

$count = [];

array_push($count, new  Socks);
array_push($count, new  Socks);
array_push($count, new  Socks);

testStrategy($count);