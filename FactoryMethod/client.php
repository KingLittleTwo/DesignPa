<?php
require('./autoload.php');
// 客户端不知到服务器有那些类名
// 只知道对方开放了一个Factory::createDB方法，允许传递数据库名称
$fact = new MysqlFactory();
$db = $fact->createDB();

$db->conn();
