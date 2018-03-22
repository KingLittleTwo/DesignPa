<?php
namespace FactoryMethod;

class DBMysql implements FactoryMethod\IDB
{
    public function conn($param = [])
    {
        echo '你连接了mysql';
    }

}
