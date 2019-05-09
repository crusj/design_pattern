<?php


namespace Observe;


abstract class ABNotifier
{
    protected $observers = [];//观察者
    protected $state = "状态";

    abstract public function add(ABObserver $observer);

    //设置状态
    public function setState($msg){
        $this->state = $msg;
    }
    //获取状态
    public function getState(){
        return $this->state;
    }

    public function notify(){
        //进行通知
        foreach ($this->observers as $item){
            if($item instanceof ABObserver){
                $item->action();
            }
        }
    }
}