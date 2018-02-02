<?php
class SilenceState implements IState{
    public function handle()
    {
        echo '静默处理';
    }
}