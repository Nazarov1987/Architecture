<?php


class MySQLFactory extends AbstractFactory
{
    public function select(){
        $this->createDBConnection($connect = 'соединение');
        $this->createDBQueryBuilder($builder = 'создание');
        $this->createDBRecord($rec = 'запись');
    }

    public function createDBConnection(string $connect): MySQL
    {
        echo "Подключаемся к MySQL".PHP_EOL;
        return new MySQL($connect);

    }

    public function createDBRecord(string $rec): MySQL
    {
        echo "Делаем запись в MySQL".PHP_EOL;
        return new MySQL($rec);
    }

    public function createDBQueryBuilder(string $builder): MySQL
    {
        echo "Формируем запрос к MySQL".PHP_EOL;
        return new MySQL($builder);
    }
}