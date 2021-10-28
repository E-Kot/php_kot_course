<?php

$age = readline('Enter your age:');

if (!is_numeric($age)) {
    exit('Data is incorrect' . PHP_EOL);
}

if ($age >= 18 && $age < 60) {
    echo 'You are welcome!', PHP_EOL;
} elseif ($age >= 80) {
    echo 'You are too old', PHP_EOL;
} elseif ($age < 10) {
    echo 'You are too young', PHP_EOL;
} else {
    echo 'Access denied!', PHP_EOL;
}

echo PHP_EOL;

switch ($age) {  // Переменная, которую будем проверять
    case $age >= 18 && $age < 60:  // условие
        echo 'You are welcome!', PHP_EOL; // что сделать в случае выполнения условия
        break; // Закончить выполнение кейса
    case $age >= 80:
        echo 'You are too old', PHP_EOL;
        break;
    case $age < 10:
        echo 'You are too young', PHP_EOL;
        break;
    default: // соответствует else. Сюда входит все, что не попало под выше описанные условия
        echo 'Access denied!', PHP_EOL;
}