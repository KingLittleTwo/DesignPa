<?php
namespace \DM;

/**
 * SimpleFactory
 */
Class SimpleFactory
{
    protected $typeList;
    public function __construct()
    {
        $this->typeList = [
            'mysql'  => __NAMESPACE__ .'\DBMysql',
            'sqlite' => __NAMESPACE__ .'\DBSqlite',
        ]
    }
    public static function createDB($type)
    {
        if (!array_key_exists($type, $this->typeList))
            throw new Exception("$type is not valid DB");
        $className = $this->typeList[$type];
        return new $className();
    }
}
