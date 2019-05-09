<?php


namespace State;

$context = new Context();

$state1 = new State1();
$state2 = new State2();

$state1->setContext($context);
$state2->setContext($context);

$context->action();
$context->action();
