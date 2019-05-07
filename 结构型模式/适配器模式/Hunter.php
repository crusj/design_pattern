<?php


namespace Adapter;


/*猎人类
 *
 * 只能适配ILion接口
 *
 */
class Hunter
{
    private $Lion;
    public function __construct(ILion $lion)
    {
        $this->Lion = $lion;
    }


    //调用ILion接口
    public function action(){

        $this->Lion->roar();
    }
}