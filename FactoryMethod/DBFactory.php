<?php
namespace FactoryMethod;

class DBFactory
{
  public function CreateDB($dbname)
  {
    $db = "\FactoryMethod\\". $dbname ."Factory";
    return new $db;
  }

}