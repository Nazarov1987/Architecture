<?php


class PostgresSQLFactory extends AbstractFactory
{
    public function select(){
        $this->createDBConnection($connect = 'соединение');
        $this->createDBQueryBuilder($builder = 'создание');
        $this->createDBRecord($rec = 'запись');
    }

    public function createDBConnection(string $connect): PostgresSQL
    {
        echo "Подключаемся к PostgresSQL".PHP_EOL;
        return new PostgresSQL($connect);
    }

    public function createDBRecord(string $rec): PostgresSQL
    {
        echo "Делаем запись в PostgresSQL".PHP_EOL;
        return new PostgresSQL($rec);
    }

    public function createDBQueryBuilder(string $builder): PostgresSQL
    {
        echo "Формируем запрос к PostgresSQL".PHP_EOL;
        return new PostgresSQL($builder);
    }
}