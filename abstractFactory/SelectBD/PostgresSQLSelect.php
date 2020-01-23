<?php


class PostgresSQLSelect extends Select
{
	protected function selectBD(): AbstractFactory
	{
		return new PostgresSQLFactory();
	}

}