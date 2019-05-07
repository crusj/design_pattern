<?php


namespace Facade;


class Facade
{
    public function actionA(){
        $subAInstance = new SubA();
        $subAInstance->action();
    }


    public function actionB(){
        $subBInstance = new SubB();
        $subBInstance->action();
    }
}