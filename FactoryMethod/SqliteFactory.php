<?php
class SqliteFactory implements MysqlFactory{
    public function createDB()
    {
        return new DBSqlite();
    }
}