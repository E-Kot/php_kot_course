<?php

// Варианты использования echo:
echo('TEST');
echo 'Hello World!';
echo 'Hello World!', PHP_EOL, 'test', PHP_EOL;

print 'Smth';  // print выводит на экран что-то одно
print PHP_EOL;

$f1 = print 1238;
var_dump($f1); // если все отработало правильно, то вернет 1, если нет - 0 или ошибку.
