<?php

// Варианты использования echo:
echo('TEST');
echo 'Hello World!';
echo 'Hello World!', PHP_EOL, 'test', PHP_EOL;

print 'Smth';  // print выводит на экран что-то одно
print PHP_EOL;

$f1 = print 1238;
var_dump($f1); // если все отработало правильно, то вернет 1, если нет - 0 или ошибку.

$name = 'Eva';
echo 'Hello $name\n', PHP_EOL;
echo "Hello $name\n";
echo "Hello, {$name}\n"; // предпочтительный способ вывода

echo "Hello, user with name \"{$name}\"\n"; // Экранирование кавычек или символов

// *************   Вывод многострочного кода:
// Тут тег в одинарных кавычках. НЕ поддерживает переменные!!!
$nowdoc = <<<'HTML'
<script type="text/javascript">
    alert(1);
</script>
HTML;

// Тут тег пишется в двойных кавычках. Поддерживает переменные!!!
$elementId = 'element1';
$heredoc = <<<JS
    document.getElementById('{$elementId}');
JS;

echo $nowdoc, PHP_EOL, $heredoc, PHP_EOL;


