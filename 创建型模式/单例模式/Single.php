<?php


namespace Single;


class Single
{
    private static $instance;

    private function __construct()
    {
    }

    public static function createInstance(){

        if(!self::$instance instanceof Single) {
            self::$instance = new Single();
        }
        return self::$instance;
    }

    //禁止克隆
    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}