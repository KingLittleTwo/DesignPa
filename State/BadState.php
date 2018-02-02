<?php
class BadState implements IState{
    public function handle()
    {
        echo '恶意下单';
    }
}