<?php


namespace Mediator;


interface IMediator
{
    public function notify($msg, ABPeople $people);
}