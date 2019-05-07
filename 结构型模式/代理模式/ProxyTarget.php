<?php


namespace Proxy;


class ProxyTarget implements IProxy
{

    public function action()
    {
        // TODO: Implement action() method.

        $targetObj = new TargetClass();
        $targetObj->action();
    }
}