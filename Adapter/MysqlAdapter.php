<?php
/**
 * Mysql 适配器
 */
class MysqlAdapter implements DBAdapter
{
    protected $connect; // 连接资源

    /**
     * 实现连接方法
     *
     * @param $host host
     * @param $username 用户名
     * @param $password 密码
     * @param $database 数据库名
     */
    public function connect($host, $username, $password, $database)
    {
        $connect = mysql_connect($host, $username, $password);
        mysql_select_db($database, $connect);
        $this->connect = $connect;
        //其他操作
    }

    /**
     * 实现查询方法
     *
     * @param $sql 需要被查询的sql语句
     * @return mi
     */
    public function query($sql)
    {
        return mysql_query($sql);
    }

    // 实现关闭方法
    public function close()
    {
        mysql_close();
    }
}