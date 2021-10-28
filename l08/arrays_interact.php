<?php
// Получение данных от юзера и запись их в массивы
$data = [];
$data['name'] = readline('Enter your name: ');
$data['age'] = readline('Enter your age: ');
$data['gender'] = readline('Enter your gender: ');
$data['programLanguages'][] = readline('Enter some programing languages: ');
$data['programLanguages'][] = readline('Enter some programing languages: ');
$data['programLanguages'][] = readline('Enter some programing languages: ');

print_r($data);
