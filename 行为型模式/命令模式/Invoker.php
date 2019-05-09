<?php


namespace Cmd;


class Invoker
{
    //命令队列
    private $CmdLists = [];

    public function orderCmd(ICmd $cmd)
    {
        //todo sth or undo
        $this->CmdLists = $cmd;

    }

    public function executeCmd(){
        foreach ($this->CmdLists as $item){
            if($item instanceof ICmd){
                $item->action();//执行
            }
        }
    }
}