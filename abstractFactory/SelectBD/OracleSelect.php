<?php


class OracleSelect extends Select
{
	protected function selectBD(): AbstractFactory
	{
			return new OracleFactory();
	}

}