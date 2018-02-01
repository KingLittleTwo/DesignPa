<?php
namespace Libs;

interface Prototype
{
    public function shallowCopy();
    public function deepCopy();
}