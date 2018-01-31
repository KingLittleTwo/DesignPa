<?php
spl_autoload_register("autoload");

function __autoload($name)
{
    require('./'. $name .'.php');
}
