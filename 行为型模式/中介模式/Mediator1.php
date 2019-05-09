<?php


namespace Mediator;


class Mediator1 implements IMediator
{
    private $people1, $people2;

    public function setPeople1(People1 $people)
    {
        $this->people1 = $people;
    }
    public function setPeople2(People2 $people)
    {
        $this->people2 = $people;
    }

    public function notify($msg, ABPeople $people)
    {
        if ($people == $this->people1) {
            $this->people2->receive($msg);
        } else {
            $this->people1->receive($msg);
        }
    }
}