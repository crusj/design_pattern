<?php


namespace FlyWeight;


class Factory
{
    public function getObj($internalStatus){
        return FlyWeight::getObj($internalStatus);
    }
}