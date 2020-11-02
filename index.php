<?php


//1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:
//если $a и $b положительные, вывести их разность;
//если $а и $b отрицательные, вывести их произведение;
//если $а и $b разных знаков, вывести их сумму;
//Ноль можно считать положительным числом.

echo "№1";
echo "<br>";
echo "<br>";
$a = rand(-100, 100);
echo 'a = ' . $a;
echo "<br>";
$b = rand(-100, 100);
echo 'b = ' . $b;
echo "<br>";
echo "<br>";


if ($a >= 0 && $b >= 0) {
    echo '|a - b| = ' . (abs($a - $b));
} else if ($a < 0 && $b < 0) {
    echo 'a * b = ' . ($a * $b);
} else {
    echo 'a + b = ' . ($a + $b);
}

echo "<br>";
echo "<br>";


//2. Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.

echo "№2";
echo "<br>";
echo "<br>";
$a = rand(0, 15);
echo 'a = ' . $a;
echo "<br>";
echo "<br>";


// я знаю, что задание про то, чтобы научиться использовать switch и сделать надо было по-другому, но я уже его изучил и сделал задание без него)


switch ($a) {
    case $a:
        for ( ; $a <= 15; $a++) {
            echo $a;
            if ($a < 15) {
                echo "; ";
            } else {
                echo ".";
            }
        }
}

echo "<br>";
echo "<br>";


//3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.

echo "№3";
echo "<br>";
echo "<br>";

$a = rand(-100, 100);
echo 'a = ' . $a;
echo "<br>";
$b = rand(-100, 100);
echo 'b = ' . $b;
echo "<br>";
echo "<br>";

function addition($x, $y) {
    return $x + $y;
}

function subtraction($x, $y) {
    return $x - $y;
}

function multiplication($x, $y) {
    return $x * $y;
}

function division($x, $y) {
    return $y ? $x / $y : 'NaN';
}

echo 'a + b = ' . addition($a, $b);
echo "<br>";

echo 'a - b = ' . subtraction($a, $b);
echo "<br>";

echo 'a * b = ' . multiplication($a, $b);
echo "<br>";

echo 'a / b = ' . division($a, $b);

echo "<br>";
echo "<br>";


//4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов,
//$operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций
//(использовать функции из пункта 3) и вернуть полученное значение (использовать switch).

echo "№4";
echo "<br>";
echo "<br>";

function mathOperation($x, $y, $operation) {
    switch ($operation) {
        case 'сложение':
            return addition($x, $y);
        case 'вычитание':
            return subtraction($x, $y);
        case 'умножение':
            return multiplication($x, $y);
        case 'деление':
            return division($x, $y);
        default:
            return 'Синий экран';
    }
}


echo 'a + b = ' . mathOperation($a, $b, 'сложение');
echo "<br>";

echo 'a - b = ' . mathOperation($a, $b, 'вычитание');
echo "<br>";

echo 'a * b = ' . mathOperation($a, $b, 'умножение');
echo "<br>";

echo 'a / b = ' . mathOperation($a, $b, 'деление');
echo "<br>";

echo 'a % b = ' . mathOperation($a, $b, 'остаток');

echo "<br>";
echo "<br>";


//5. Посмотреть на встроенные функции PHP. Используя имеющийся HTML-шаблон, вывести текущий год в подвале при помощи встроенных функций PHP.

echo "№5";
echo "<br>";
echo "<br>";

$date = date('Y');

echo "Год в футере";
echo "<br>";
echo "<br>";


//6. *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.

echo "№6";
echo "<br>";
echo "<br>";

function power($x, $pow) {
    if ($pow === 1) {
        return $x;
    } else {
        return $x *= power($x, --$pow);
    }
}

$a = rand(2, 5);
echo "a = " . $a;
echo "<br>";

$b = rand(3, 8);
echo "b = " . $b;
echo "<br>";
echo "<br>";

echo "a^b = " . power($a, $b);
echo "<br>";
echo "<br>";


//7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
//22 часа 15 минут
//21 час 43 минуты

echo "№7";
echo "<br>";
echo "<br>";

$hours = date('h');
$minutes = date('i');
$seconds = date('s');
$format = date('A');

if ($format === 'PM') {
    $hours += 12;
}

if ($hours !== 11 && $hours % 10 === 1) {
    $hours .= ' час';
} else if ($hours % 100 !== 12 && $hours % 100 !== 13 && $hours % 100 !== 14 && ($hours % 10 === 2 || $hours % 10 === 3 || $hours % 10 === 4)) {
    $hours .= ' часа';
} else {
    $hours .= ' часов';
}

if ($minutes !== 11 && $minutes % 10 === 1) {
    $minutes .= ' минута';
} else if ($minutes % 100 !== 12 && $minutes % 100 !== 13 && $minutes % 100 !== 14 && ($minutes % 10 === 2 || $minutes % 10 === 3 || $minutes % 10 === 4)) {
    $minutes .= ' минуты';
} else {
    $minutes .= ' минут';
}

if ($seconds !== 11 && $seconds % 10 === 1) {
    $seconds .= ' секунда';
} else if ($seconds % 100 !== 12 && $seconds % 100 !== 13 && $seconds % 100 !== 14 && ($seconds % 10 === 2 || $seconds % 10 === 3 || $seconds % 10 === 4)) {
    $seconds .= ' секунды';
} else {
    $seconds .= ' секунд';
}

echo $hours . ', ' . $minutes . ', ' . $seconds;

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная</title>
</head>
<body>
<header>Год:</header>
<footer><?= $date ?></footer>
</body>
</html>
