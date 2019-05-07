<?php


namespace Decorate;


abstract class AbDecorate implements IDecorate
{
    protected $decorateObj;
    public function __construct(IDecorate $decorateObj)
    {
        $this->decorateObj = $decorateObj;
    }
}