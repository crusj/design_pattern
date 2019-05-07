<?php


namespace Builder;


class Builder
{
    private $express;
    private $A, $B;

    public function __construct(IExpress $express)
    {
        $this->express = $express;
    }

    public function processA()
    {
        $this->A = $this->express->createA();
    }

    public function processB()
    {
        $this->B = $this->express->createB();
    }

    //获取产品
    public function getProduct()
    {
        $this->processA();
        $this->processB();
        return ['A' => $this->A, 'B' => $this->B];
    }
}