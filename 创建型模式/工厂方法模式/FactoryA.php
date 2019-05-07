<?php


namespace MethodFactory;


class FactoryA implements IFactory
{
    public function createProduct()
    {
        // TODO: Implement createProduct() method.
        return new ProductA();
    }
}