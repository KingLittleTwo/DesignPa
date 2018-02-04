<?php
include_once('./User.php');
include_once('./UserObserver.php');
include_once('./TestObserver.php');

use Observer\User;
use Observer\UserObserver;
use Observer\TestObserver;

$user = new User();
$observer = new UserObserver;
$test = new TestObserver;

$user->attach($observer);
$user->attach($test);
$user->pro = 123;


