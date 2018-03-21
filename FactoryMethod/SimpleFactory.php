<?php
namespace \DM;

/**
 * SimpleFactory
 */
class SimpleFactory
{
    protected $typeList;
    public function __construct()
    {
        self::$typeList = [
            'mysql'  => __NAMESPACE__ .'\DBMysql',
            'sqlite' => __NAMESPACE__ .'\DBSqlite',
        ];
    }
    public static function createDB($type)
    {
        if (!array_key_exists($type, self::$typeList))
            throw new Exception("$type is not valid DB");
        $className = self::$typeList[$type];
        return new $className();
    }
}
