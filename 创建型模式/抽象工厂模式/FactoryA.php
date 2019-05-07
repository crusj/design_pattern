<?php


namespace AbstractFactory;


class FactoryA implements IFactory
{
    public function createProduct1()
    {
        // TODO: Implement createProduct() method.
        return new ProductA();
    }
    public function createProduct2()
    {
        // TODO: Implement createProduct2() method.
        return new ProductB();
    }
}