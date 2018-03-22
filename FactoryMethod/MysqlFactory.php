<?php
namespace FactoryMethod;

class MysqlFactory implements IFactory{
    public function createDB()
    {
        return new \FactoryMethod\DBMysql();
    }
}