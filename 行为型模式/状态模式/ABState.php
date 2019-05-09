<?php


namespace State;


abstract class ABState
{
    protected $context;

    abstract function action();

    public function setContext(Context $context){
        $this->context = $context;
    }
}