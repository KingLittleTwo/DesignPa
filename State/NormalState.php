<?php
class NormalState implements IState{
    public function handle()
    {
        echo '正常下单';
    }
}