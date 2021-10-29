<?php

$programLanguagesNew = [
    'PHP',
    'JS',
    'C++',
    'Java',
    'Go',
    'Kotlin',
];

asort($programLanguagesNew);
arsort($programLanguagesNew);

print_r($programLanguagesNew);

$numbers = [
    1,
    10,
    3,
    200,
    66,
    43,
    2,
    105,
];
asort($numbers);
print_r($numbers);

$students = [
    [
        'name' => 'Dima',
        'age'  => '34',
    ],
    [
        'name' => 'Mykola',
        'age'  => '22',
    ],
    [
        'name' => 'Hanna',
        'age'  => '30',
    ],
    [
        'name' => 'Dariya',
        'age'  => '50',
    ],
    [
        'name' => 'alex',
        'age'  => '31',
    ],

];

// сортировка возраста от меньшего к большему (до PHP 7)
uasort($students, static function (array $a, array $b) {
    if ($a['age'] === $b['age']) {
        return 0; // ни чего не делать
    }
    return $a['age'] < $b['age'] ? -1 : 1;
});

// сортировка возраста от меньшего к большему (PHP 7+)
uasort($students, static function (array $a, array $b) {
    return $a['age'] <=> $b['age']; // оператор <=> заменяет всю конструкцию из примера выше
});

print_r($students);