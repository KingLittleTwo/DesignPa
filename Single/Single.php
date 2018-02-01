<?php
/**
 * 单例模式
 */
class Single
{
    protected static $ins = null;

    public static function getIns()
    {
        if (self::$ins === null)
            self::$ins = new self();
        return self::$ins;
    }

    // 方法前加final，则方法不能被覆盖，类前加final，则类不能被继承
    final protected function __construct()
    {

    }

    // 防止复制clone
    final protected function __clone()
    {

    }

}

$s = Single::getIns();
