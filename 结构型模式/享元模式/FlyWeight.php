<?php


namespace FlyWeight;


class FlyWeight
{
    //对象池
    private static $objs =[];

    private $internalStatus;//内部状态
    private $outStatus;//外部状态

    public function __construct($internalStatus)
    {
        $this->internalStatus = $internalStatus;
    }

    public static function getObj($internalStatus){
        if(!isset(self::$objs[$internalStatus])){
            self::$objs[$internalStatus] = new FlyWeight($internalStatus);
        }
        return self::$objs[$internalStatus];
    }

    public function setOutStatus($outStatus){
        $this->outStatus = $outStatus;
    }
}