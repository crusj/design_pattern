<?php


namespace Decorate;


class DecorateA extends AbDecorate
{
    public function action()
    {
        // todo

        if($this->decorateObj instanceof IDecorate){
            $this->decorateObj->action();
        }
    }
}