<?php
namespace Libs;

class Demo
{
    public $string;
}
class UsePrototype
{
    public function shallow()
    {
        $demo = new Demo();
        $demo->string = "susan";
        $object_shallow_first = new ConcretePrototype($demo);
        $object_shallow_second = $object_shallow_first->shallowCopy();
        
        var_dump($object_shallow_first->getName());
        echo '<br/>';
        var_dump($object_shallow_second->getName());
        echo '<br/>';
        
        $demo->string = "sacha";
        var_dump($object_shallow_first->getName());
        echo '<br/>';
        var_dump($object_shallow_second->getName());
        echo '<br/>';
        
    }
    
    public function deep()
    {
        $demo = new Demo();
        $demo->string = "Siri";
        $object_deep_first = new ConcretePrototype($demo);
        $object_deep_second = $object_deep_first->deepCopy();
    
        var_dump($object_deep_first->getName());
        echo '<br/>';
        var_dump($object_deep_second->getName());
        echo '<br/>';
    
        $demo->string = "Demo";
        var_dump($object_deep_first->getName());
        echo '<br/>';
        var_dump($object_deep_second->getName());
        echo '<br/>';
    
    }
    
}