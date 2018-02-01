<?php
class MysqlFactory implements MysqlFactory{
    public function createDB()
    {
        return new DBMysql();
    }
}