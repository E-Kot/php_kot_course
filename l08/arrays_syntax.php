<?php
// Старый синтаксис:
$programLanguagesOld = array(
    0 => 'PHP',
    1 => 'JS',
    2 => 'C++',
    3 => 'Java',
    4 => 'Go',
    5 => 'Kotlin',
);
// Новый синтаксис:
$programLanguagesNew1 = [
    0 => 'PHP',
    1 => 'JS',
    2 => 'C++',
    3 => 'Java',
    4 => 'Go',
    5 => 'Kotlin',
];
// Можно записывать без указания ключей:
$programLanguagesNew2 = [
    'PHP',
    'JS',
    'C++',
    'Java',
    'Go',
    'Kotlin',
    [
        'HTML',
        'CSS',
        'XHTML'
    ]
];

// Добавление данных в массив
$programLanguagesNew2[] = 'C#';
$programLanguagesNew2[9] = 'Scala';
$programLanguagesNew2[4] = 'HTML';
$programLanguagesNew2[] = 'Python';

// Удаление данных из массива
unset($programLanguagesNew2[4], $programLanguagesNew2[10]);

// ассоциативный массив (ключи в виде строк)
$student = [
    'name' => 'Vasyl',
    'age' => 22,
    'isGoodBoy' => true,
    'gender' => 'male',
    'programingLanguages' => [
        'PHP',
        'JS',
        'Go'
    ]
];
//$student[] = 'TEST';
//var_dump($programLanguagesNew2);
print_r($programLanguagesNew2);
var_dump($student['name']);
echo "{$student['name']} ({$student['age']} years old), {$student['gender']}", PHP_EOL;

// доступ к данным вложенного массива
var_dump($student['programingLanguages'][1]);