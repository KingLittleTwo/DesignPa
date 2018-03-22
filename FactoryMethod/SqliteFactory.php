<?php

namespace FactoryMethod;

class SqliteFactory implements IFactory{
    public function createDB()
    {
        return new \FactoryMethod\DBSqlite();
    }
}