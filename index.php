<?php
include "MyList.php";
$list = new MyList();
$list->add(1);
$list->add(2);
$list->add(3);
$list->add('');
$list->add(4);
$list->add(5);
$list->add(6);
$list->add(7);
var_dump($list->getSize());