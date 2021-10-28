<?php

// 1 - print 123
/*
$x = ;
if ($x == 1) {
echo 1;
}
if ($x == 2) {
echo 2;
}
if ($x == 3) {
echo 3;
}
*/

$x = 1 && 2 && 3;
if ($x == 1) {
    echo 1;
}
if ($x == 2) {
    echo 2;
}
if ($x == 3) {
    echo 3;
}

echo PHP_EOL;

// 2 - Calculator

$userInt1 = readline('Enter the number:');
if (!is_numeric($userInt1)) {
    exit('Data is incorrect' . PHP_EOL);
}
$userInt2 = readline('Enter the number:');
if (!is_numeric($userInt2)) {
    exit('Data is incorrect' . PHP_EOL);
}
$userOperator = readline('What should be done? Enter: +, -, / or * ');
$result = 0;

switch ($userOperator) {
    case $userOperator === '+':
        $result = $userInt1 + $userInt2;
        echo 'Result = ' . $result, PHP_EOL;
        break;
    case $userOperator === '-':
        $result = $userInt1 - $userInt2;
        echo 'Result = ' . $result, PHP_EOL;
        break;
    case $userOperator  === '/':
        $result = $userInt1 / $userInt2;
        echo 'Result = ' . $result, PHP_EOL;
        break;
    case $userOperator  === '*':
        $result = $userInt1 * $userInt2;
        echo 'Result = ' . $result, PHP_EOL;
        break;
    default:
        echo 'I can’t count it', PHP_EOL;
}


