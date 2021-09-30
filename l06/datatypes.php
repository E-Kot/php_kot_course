<?php

$int = 1; // интеджер - число
$float = 1.001; // - Флоат - число с плавающей точкой
$string = 'text'; // строка
$boll = true;
$boll = false; // булевый тип данных - истина или ложь
$array = [1, 2, 3, 'test']; // Массив. может содержать смешанные типы данных
$object = new stdClass(); // Объект
$null = null; // ни чего, совсем ни чего, пустота.

$file = fopen(__DIR__ . '/math.php', 'rb'); // ресурс (открытие). Взаимодействие с потоковыми данными. Можно обрабатывать по частям
fclose($file); // Закрытие ресурса

$callable = static function () {
    // Коллабол. исполняемый тип данных. Обычно анонимные функции
};

var_dump((string)2.547); //Преобразование числа в строку
var_dump((int)'547'); //Преобразование строки в число
var_dump((float)'5.437');
var_dump((int)' 437 eggs'); // тут будут преобразованы цифры, НЕ цифры будут срезаны
var_dump((int)'eggs 437'); // !!! Если строка начинается не с числа или пробела, а с букв, то ни чего интерпретироваться не будет. Получим 0.
var_dump((int)true);  // 1
var_dump((int)false); // 0
var_dump((bool)'');   // false
var_dump((bool)'0');  // false
var_dump((bool)0);    // false
var_dump((bool)[]);    // false
var_dump((bool)'text');   // true
var_dump((bool)'1');      // true
var_dump((bool)1);        // true
var_dump((bool)[1]);      // true

var_dump(is_int(1)); // Проверка - является ли данное определенным типом данных (числом в этом случае)
var_dump(is_float(1.1));
var_dump(is_string('1'));
var_dump(is_bool(false));
var_dump(is_array([1]));
var_dump(is_object(new stdClass()));
var_dump(is_numeric(1)); // считает числом любые числа, даже с точкой или в строке. Используется часто для валидации данных, которые приходят от пользователя с формы
var_dump(is_numeric(1.2));
var_dump(is_numeric('1'));

$t123 = 12;
var_dump(isset($t123)); // Проверка существует ли переменная или ключ массива, !!! если данное есть в коде и = null, то функция скажет, что данного нет !!!
var_dump(empty(null)); // Проверяет пустые ли данные. Пусто ли?
var_dump(empty(0)); // true
var_dump(empty(1)); // false

var_dump(1); // дебаг функция. Показывает данные и их тип