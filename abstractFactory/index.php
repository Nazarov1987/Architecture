<?php

require 'SelectBD/Select.php';
require 'SelectBD/MySQLSelect.php';
require 'SelectBD/PostgresSQLSelect.php';
require 'SelectBD/OracleSelect.php';

require 'BD/Factory/AbstractFactory .php';
require 'BD/Factory/MySQLFactory.php';
require 'BD/Factory/PostgresSQLFactory.php';
require 'BD/Factory/OracleFactory.php';

require 'BD/AbstractBD.php';
require 'BD/MySQL.php';
require 'BD/Oracle.php';
require 'BD/PostgresSQL.php';

function testAbstractFactory(Select $select) {
	return $select->startSelect();

}

testAbstractFactory(new OracleSelect());