<?php


namespace Bridge;


abstract class BagSize
{
    protected $bagColor;
    public function __construct(BagColor $bagColor)
    {
        $this->bagColor = $bagColor;
    }
    abstract function action();
}