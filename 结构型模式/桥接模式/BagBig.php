<?php


namespace Bridge;


class BagBig extends BagSize
{
    public function action()
    {
        echo "I am big bag";
        $this->bagColor->action();
    }
}