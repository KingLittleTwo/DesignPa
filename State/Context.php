<?php
class Context
{
    // 下单数
    private $count;

    // 状态类实例
    private $stateInstance;

    public function __construct($count = 1)
    {
        $this->count = $count;
    }

    public function setState($count)
    {
        if ($this->count < 5 && $this->count > 0)
            $this->stateInstance = new NormalState();
        else if ($this->count >= 5 && $this->count < 8)
            $this->stateInstance = new BadState();
        else
            $this->stateInstance = new SilenceState();

        $this->stateInstance->handle();
    }
}