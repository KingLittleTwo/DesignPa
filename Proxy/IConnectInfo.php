<?php
namespace Proxy;
interface IConnectInfo
{
    const HOST   = "localhost";
    const UNAME  = "root";
    const PWD    = "root";
    const DBNAME = "test";

    public function dbConnect();
}