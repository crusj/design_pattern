<?php


namespace AbstractFactory;


class FactoryB implements IFactory
{
    public function createProduct1()
    {
        // TODO: Implement createProduct() method.
        return new ProductC();
    }
    public function createProduct2()
    {
        // TODO: Implement createProduct2() method.
        return new ProductD();
    }
}