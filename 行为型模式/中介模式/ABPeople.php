<?php


namespace Mediator;


abstract class ABPeople
{
    protected $mediator;

    public function know(IMediator $mediator)
    {
        $this->mediator = $mediator;
    }

    public function notify($msg){}
    public function receive($msg){}
}