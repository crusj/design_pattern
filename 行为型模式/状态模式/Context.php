<?php


namespace State;


class Context
{
    private $state;
    public function setState(ABState $state){
        $this->state = $state;
    }
    public function action(){
        if($this->state instanceof  ABState){
            $this->state->action();
        }
    }
}