<?php


namespace Observe;


abstract class ABObserver
{
    private $notifier;
    public function action(){
        if($this->notifier instanceof ABNotifier){
            $state = $this->notifier->getState();
            //todo
        }
    }
    public function setNotifier(ABNotifier $notifier){
        $this->notifier = $notifier;
    }
}