<?php


namespace Cmd;


class Cmd1 implements ICmd
{
    private $receiver;
    public function __construct()
    {
        $this->receiver = new Receiver1();
    }

    public function action()
    {
        // TODO: Implement action() method.
        $this->receiver->dost();
    }
}