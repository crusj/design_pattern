<?php


namespace MethodFactory;


class FactoryB implements IFactory
{
    public function createProduct()
    {
        // TODO: Implement createProduct() method.
        return new ProductB();
    }
}