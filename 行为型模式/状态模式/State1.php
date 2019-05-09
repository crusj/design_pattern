<?php


namespace State;


class State1 extends ABState
{
    public function action()
    {
        // TODO: Implement action() method.
        $this->context->setState(new State2());
    }

}