<?php
namespace FactoryMethod;
/**
 * 用此工厂创建db
 */
interface IFactory
{
    public function createDB();
}