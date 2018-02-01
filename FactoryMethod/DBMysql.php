<?php
namespace SimpleFactory;

use SimpleFactory\DB;

class DBMysql implements DB
{
    public function conn($param = [])
    {
        echo '你连接了mysql';
    }

}
