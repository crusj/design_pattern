<?php


namespace Builder;


class Client
{
    public function createProduct(){
        $expressAInstance = new ExpressA();// 表现形式
        $builderInstance = new Builder($expressAInstance); //建造者

        $productInfo = $builderInstance->getProduct();//获取构建产品
    }
}