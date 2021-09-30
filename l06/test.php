<?php

$foo = 100;
$str = 'text';
$sum = $foo - '2.5';
$sum2 = $foo + (int)'2 sssss';
$sum3 = (int)$str + $foo;


var_dump($foo);
var_dump($sum);
var_dump($sum2);
var_dump($sum3);
var_dump((int)$str);
