<?php
require('vendor/autoload.php');

$db = new \FactoryMethod\DBFactory();

$db = $db->CreateDB("Mysql");

$db->conn();
