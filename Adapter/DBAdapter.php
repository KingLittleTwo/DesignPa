<?php
/**
 * 适配器模式
 * Target适配目标： DBAdapter接口
 * Adaptee被适配者： mysql和mysqli的数据库操作函数
 * Adapter适配器 ：mysql类和mysqli类
 */

/**
 * Interface IDatabase 适配目标，规定的接口将被适配对象实现
 * 约定好统一的api行为
 */
interface DBAdapter
{
    // 定义数据库连接方法
    public function connect($host, $username, $password, $database);
    // 定义数据库查询方法
    public function query($sql);
    // 关闭数据库
    public function close();
}