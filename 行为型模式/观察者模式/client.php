<?php
namespace Observe;

$observer = new Observer1();
$notifier = new Notifier1();

$observer->setNotifier($notifier);
$notifier->add($observer);

$notifier->setState("状态已改变");
$notifier->notify();//通知
