<?php

echo 1 + 2, PHP_EOL;
echo 1 - 2, PHP_EOL;
echo 1 * 2, PHP_EOL;
echo 1 / 2, PHP_EOL;

echo 543 * 0.2, PHP_EOL;  // 20%

echo 3 % 2, PHP_EOL; // Остаток от деления
echo 3 % 5, PHP_EOL;
echo 8 % 3, PHP_EOL;

echo 3 ** 2, PHP_EOL; // Возвести в степень (3 во 2 степени)
echo 5 ** 3, PHP_EOL;

$result = 0;
$result += 2;
$result += 7;
$result *= 2;
$result /= 5;
echo $result, PHP_EOL;

// **************** Инкременты и декременты

$number = 5;
$number++; // постИнкремент - Добавляет 1 к числу в переменной
$number++;
$number--; // постДекремент - Вычитает 1 из числаS в переменной
echo $number, PHP_EOL;

$number2 = 5;
++$number2; // преИнкремент - Добавляет 1 к числу в переменной
--$number2; // преДекремент - Вычитает 1 из числаS в переменной
echo $number2, PHP_EOL;

$number3 = 5;
echo $number3++, PHP_EOL, $number3, PHP_EOL; // постИнкремент преобразует число для следующего вызова
echo ++$number3, PHP_EOL; // преДекремент преобразует число сразу
$number4 = 5;
echo $number4++ + ++$number4, PHP_EOL;