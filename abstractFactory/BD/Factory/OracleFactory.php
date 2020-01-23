<?php


class OracleFactory extends AbstractFactory
{
    public function select(){
        $this->createDBConnection($connect = 'соединение');
        $this->createDBQueryBuilder($builder = 'создание');
        $this->createDBRecord($rec = 'запись');
    }

    public function createDBConnection(string $connect): Oracle
    {
        echo "Подключаемся к Oracle".PHP_EOL;
        return new Oracle($connect);
    }

    public function createDBRecord(string $rec): Oracle
    {
        echo "Делаем запись в Oracle".PHP_EOL;
        return new Oracle($rec);
    }

    public function createDBQueryBuilder(string $builder): Oracle
    {
        echo "Формируем запрос к Oracle".PHP_EOL;
        return new Oracle($builder);
    }
}