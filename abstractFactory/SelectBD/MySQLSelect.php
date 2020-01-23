<?php


class MySQLSelect extends Select
{
	protected function selectBD(): AbstractFactory
	{
			return new MySQLFactory();
	}

}