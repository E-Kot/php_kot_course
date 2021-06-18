<?php

$name = readline('Enter your name: ');
$password = readline('Enter your password : ');
$age = readline('Enter your age: ');

echo "Hello {$name}, {$age} years old. Don`t forgot your password: {$password}", PHP_EOL;

//var_dump($name, $password, $age);