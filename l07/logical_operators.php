<?php

var_dump(1 == 3); // Сравниваются значения
var_dump(1 != 1); // оператор НЕ равно
var_dump('test' == 'qwerty');

var_dump(1 === '1'); // Сравниваются и значения, и типы данных
var_dump(1 !== '1'); // оператор строгое НЕ равно
var_dump(0 === false); // false
var_dump(0 == false); // true

var_dump(1 > 3); // false
var_dump('2021-05-02' > '2021-05-01'); // true
var_dump('2021-05-02' >= '2021-05-01'); // true
var_dump(1 >= 1); // true
var_dump(1 < 3); // true
var_dump('2021-05-02' < '2021-05-01'); // false
var_dump('2021-05-02' <= '2021-05-01'); // false
var_dump(1 <= 1); // true

$minSalary = 350;
$maxSalary = 700;
$salary = random_int(300, 1000); // Рандом от 300 до 1000
var_dump($salary,  $salary >= $minSalary && $salary <= $maxSalary); // && - оператор И. В примере, выражение сравнения должно соответствовать одновременно 2 условиям: >= И <=
var_dump($salary,  $salary >= $minSalary || $salary <= $maxSalary); // ||- оператор ИЛИ. В примере, выражение сравнения должно соответствовать 1 из 2 условий: >= ИЛИ <=
var_dump($salary,  $salary >= $minSalary and $salary <= $maxSalary); // and = &&, у and меньше приоритет
var_dump($salary,  $salary >= $minSalary or $salary <= $maxSalary); // or = || , у or меньше приоритет

// xor - как or, но 1 из условий обязательно должно давать true, а другое false
// ------------------

var_dump($salary, $salary >= $minSalary && $salary <= $maxSalary && $salary != 666);