<?php


namespace Mediator;


class People1 extends ABPeople
{
    public function notify($msg)
    {
        if ($this->mediator instanceof IMediator) {
            $this->mediator->notify($msg, $this);
        }
    }

    public function receive($msg)
    {
        // TODO: Implement receive() method.
        echo "I GET MSG FROM PEOPLE2";
    }
}