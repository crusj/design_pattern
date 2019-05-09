<?php


namespace Observe;


class Notifier1 extends ABNotifier
{
    public function add(ABObserver $observer)
    {
        // TODO: Implement add() method.
        array_push($this->observers,$observer);
    }
}