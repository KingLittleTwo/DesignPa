<?php
namespace Proxy;

use Proxy\IConnectInfo;

class UniversalConnect implements IConnectInfo
{
    private static $server    = IConnectInfo::HOST;
    private static $currentDB = IConnectInfo::DBNAME;
    private static $user      = IConnectInfo::UNAME;
    private static $pass      = IConnectInfo::PWD;
    private static $hookup;

    public function doConnect()
    {
        self::$hookup = mysqli_connect(self::$server, self::$user, self::$pass, self::$currentDB);

        if (self::$hookup)
            echo "mysql connected!!!";
        elseif (mysqli_connect_error(selef::$hookup))
            echo "connect failed: " .mysqli_connect_error();

        return self::$hookup;
    }
    
}