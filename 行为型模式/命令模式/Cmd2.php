<?php


namespace Cmd;


class Cmd2 implements ICmd
{
    private $receiver;
    public function __construct()
    {
        $this->receiver = new Receiver2();
    }
    public function action()
    {
        // TODO: Implement action() method.
        $this->receiver->dost();
    }
}