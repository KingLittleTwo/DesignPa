<?php
/**
 * 客户端使用演示
 * 这里以mysql为例
 * 只要模式设计好，不论有多少种数据库，实现和调用方式都是一样的
 * 因为都是实现的同一个接口，所以都是可以随意切换的
 */

$host = 'localhost';
$username = 'root';
$password = 'root';
$database = 'mysql';

//$client = new Mysql();
$client = new MysqliAdapter();
$client->connect($host, $username, $password, $database);
$result = $client->query("select * from db");
while ($rows = mysqli_fetch_array($result)) {
    var_dump($rows);
}
$client->close();