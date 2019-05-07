<?php


namespace SimpleFactory;


//工厂类
class Factory
{
    //工厂方法
    public static function createProduct(string $productType)
    {
        switch ($productType) {
            case 'A':
                return new ProductA();
                break;
            case 'B':
                return new ProductB();
                break;
            default:
                return NULL;
        }
    }
}