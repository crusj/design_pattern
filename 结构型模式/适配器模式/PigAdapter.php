<?php


namespace Adapter;

/**
 * Pig适配器,使其能兼容Hunter
 * Class PigAdapter
 * @package Adapter
 */

class PigAdapter extends Pig implements ILion
{
    public function roar()
    {
        $this->eat();
    }
}