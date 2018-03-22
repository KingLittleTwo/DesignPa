<?php
namespace FactoryMethod;

class DBSqlite implements FactoryMethod\IDB
{
    public function conn($param = [])
    {
        echo '你连接了DBSqlite';
    }

}
