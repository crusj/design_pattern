<?php
namespace Mediator;

$mediator = new Mediator1();

$people1 = new People1();
$people2 = new People2();

$mediator->setPeople1($people1);
$mediator->setPeople2($people2);

$people1->know($mediator);
$people2->know($mediator);

$people1->notify("哈哈哈");
