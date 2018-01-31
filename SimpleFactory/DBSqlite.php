<?php
namespace SimpleFactory;

use SimpleFactory\DB;

Class DBSqlite implements DB
{
    public function conn($param = [])
    {
        echo '你连接了DBSqlite';
    }

}
