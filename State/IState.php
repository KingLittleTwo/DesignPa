<?php

interface IState
{
    public function handle(Context $context);
}