<?php
namespace Observer;

/**
 * 观察者要实现的唯一方法
 * 也是被subject调用的方法
 */
class UserObserver implements \SplObserver
{
    public function update(\SplSubject $subject)
    {
        echo get_class($subject) .' has been updated!';
    }
}