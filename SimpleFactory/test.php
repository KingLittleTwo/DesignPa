<?php

require("./vendor/autoload.php");

$obj = new SimpleFactory\SimpleFactory();

$obj->createDB("mysql")->conn();
echo '=======================';
$obj->createDB("sqlite")->conn();