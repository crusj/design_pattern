<?php
namespace Category;

class Context{
    function dst(Category $category){
        $category->action();
    }
}

$context = new Context();
$category1 = new Category1();
$category2 = new Category2();

$context->dst($category1);
$context->dst($category2);
