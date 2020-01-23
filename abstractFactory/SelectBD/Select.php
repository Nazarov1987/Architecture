<?php


abstract class Select
{
    public function startSelect() {
	$startSelect = $this->selectBD();

	echo "Приступаем к выбору BD!".PHP_EOL;

    $startSelect-> select();

}

abstract protected function selectBD():AbstractFactory;

}