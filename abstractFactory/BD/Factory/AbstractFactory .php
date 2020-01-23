<?php


abstract class AbstractFactory
{
    abstract public function select();
    abstract public function createDBConnection(string $connect);
    abstract public function createDBRecord(string $rec);
    abstract public function createDBQueryBuilder(string $builder);

}