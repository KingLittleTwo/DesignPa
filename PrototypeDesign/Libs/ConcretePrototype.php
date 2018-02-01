<?php
namespace Libs;

class ConcretePrototype implements Prototype
{
    private $_name;
    public function __contruct($name)
    {
        $this->_name = $name;
    }

    public function setName($name)
    {
        $this->_name = $name;
    }

    public function getName()
    {
        return $this->_name;
    }

    /**
     * 浅拷贝
     */
    public function shallowCopy()
    {
        return clone $this;
    }

    public function deepCopy()
    {
        $serialize_obj = serialize($this);
        $clone_obj = unserialize($serialize_obj);
        return $clone_obj;
    }
}