<?php

error_reporting(E_ALL); // Выводить все ошибки
//error_reporting(E_ERROR); // Выводить только все Фатальные ошибки
//error_reporting(E_ALL ^ E_WARNING); // Выводить все ошибки, кроме E_WARNING
//error_reporting(E_ALL ^ E_WARNING ^ E_ERROR); // Выводить все ошибки, кроме E_WARNING и кроме фатальных
//error_reporting(0); // Не выводить ошибки !!! Этот режим должен быть на продакшен версии сайта (но он не отменяет запись в логи)

$array = [];
echo $t;
//var_dump(1 / 0);
var_dump($t);
var_dump($array['t']);
