<?php
/**
 * Mysqli 适配器
 */
class MysqliAdapter implements DBAdapter
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
        $connect = mysqli_connect($host, $username, $password, $database);
        $this->connect = $connect;
        //其他操作
    }

    /**
     * 实现查询方法
     *
     * @param $sql 需要被查询的sql语句
     */
    public function query($sql)
    {
        return mysqli_query($this->connect, $sql);
    }

    // 实现关闭
    public function close()
    {
        mysqli_close($this->connect);
    }
}