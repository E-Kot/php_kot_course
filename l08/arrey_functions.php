<?php

$programLanguages = [
    'PHP',
    'JS',
    'C++',
    'Java',
    'Go',
    'Kotlin',
];

//Добавление элемента в конец массива - устаревший синтаксис!
array_push($programLanguages, 'C#');
//Добавление элемента в конец массива - новый синтаксис: $programLanguages[] = 'C#';

var_dump(count($programLanguages));

//Функция array_shift() удаляет из массива 1 элемент и возвращает его
$php = array_shift($programLanguages);
$js = array_shift($programLanguages);
$cPlus = array_shift($programLanguages);

//Функция array_unshift() берет данное и вставляет в начало массива
array_unshift($programLanguages, $cPlus);
array_unshift($programLanguages, $js);
array_unshift($programLanguages, $php);

$other = [
    'HTML',
    'XHTML',
    'CSS',
    'XHTML',
    'CSS',
];

$allLanguages = array_merge($programLanguages, $other);

print_r($allLanguages);

var_dump($php);

$keys = [
    'name',
    'age',
    'gender',
];
$values = [
    'Dima',
    '22',
    'male',
];
//Функция собирает из 2х массивов 1 ассоциативный: ключ + значение
$data = array_combine($keys, $values);

$student = [
    'name' => 'Vasyl',
    'age' => 22,
    'gender' => 'male',
];
print_r($student);

// Проверка существует ли ключ в массиве
if (array_key_exists('name', $student)) {
    var_dump($student['name']);
} else {
    echo 'Key "name" is required', PHP_EOL;
}

// Подчищает массив, убирает одинаковые элементы
print_r(array_unique($other));