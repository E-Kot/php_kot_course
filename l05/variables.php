<?php

$fruit = 'Orange';
echo $fruit, PHP_EOL;
echo $fruit, PHP_EOL;

$fruit = 'Apple';
echo $fruit, PHP_EOL;
echo $fruit, PHP_EOL;
echo $fruit, PHP_EOL;

// FAILS:
// test = 123; $ is required
// $1test = 123; no numbers on start
// $te#st = 123; no special characters
// $te st = 123; no spaces

//   AVAILABLE:
$tes2t = 123;
$_test_2v = 123;
$minSum = 12;
$allStudentslist = [];


$test = 'TEST';
$link = $test;  // Переменная берет данные из другой переменной, но использует их независимо (не изменяя данные в исходной переменной)
$link = &$test; // переменная созданная с помощью ссылки (&) создает новое имя для 1 переменной. Эти 2 переменные связаны между собой, данные в них синхронизированны
var_dump($test, $link);  // Функция var_dump(); Выводит тип данных и сами данные, которые находятся в переменных

$test = 123;   // переменные созданные с помощью ссылок влияют друг на друга. Изменяя данные в 1, меняются данные и в другой переменной
$link = 8854;
var_dump($test, $link);

