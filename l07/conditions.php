<?php

// Правильная и принятая запись
$age = 18;
if ($age >= 18) {
    echo 'OK';
} else {
    echo 'FAIL';
}
echo PHP_EOL;

// Правильные, но НЕ рекомендуемые записи
// 1
if ($age >= 18)
    echo 'OK';
elseif ($age == 33)
    echo 'Very OK';
else
    echo 'FAIL';

echo PHP_EOL;

// 2
if ($age >= 18) echo 'OK'; elseif ($age == 33) echo 'Very OK'; else echo 'FAIL';
echo PHP_EOL;

// 3 Шаблонный синтаксис для работы с HTML
if ($age >= 18):
    echo 'OK';
elseif ($age == 33):
    echo 'Very OK';
else:
    echo 'FAIL';
endif;

echo PHP_EOL;

// Тернарник. Используется при коротких строках условия и команд
echo $age >= 18 ?  'OK' : 'FAIL';  // Вывести: условие выполняется ? - 'OK', иначе 'FAIL'.
echo PHP_EOL;

// Плохое решение
$age = 33;
echo $age == 33 ? 'Jesus' : ($age >= 18 ? 'OK' : 'FAIL');  // Вывести: условие выполняется ? - 'OK', иначе 'FAIL'.
echo PHP_EOL;


