<?php
namespace Observer;

/**
 * 观察者模式：被观察对象（主体对象）
 * 主体对象维护观察者列表并发送通知
 */
class User implements \SplSubject
{
    protected $_data = [];
    protected $_observers;

    public function __construct()
    {
        $this->_observers = new \SplObjectStorage();
    }

    /**
     * 附加观察者
     */
    public function attach(\SplObserver $observer)
    {
        $this->_observers->attach($observer);
    }

    /**
     * 取消观察者
     */
    public function detach(\SplObserver $observer)
    {
        $this->_observers->detach($observer);
    }

    /**
     * 通知观察者方法
     */
    public function notify()
    {
        foreach ($this->_observers as $observer)
        {
            $observer->update($this);
        }
    }

    public function __set($name, $value)
    {
        $this->_data[$name] = $value;
        // 通知观察者用户被改变
        $this->notify();
    }
}