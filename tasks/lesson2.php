<?php

$a = 5;
$b = -4;
$c = 8;

// вывести среднее

echo "Среднее значение данных равно " . ($a + $b + $c)/3;
echo "<br>";

// количество отрицательных

if ($a<0 && $b<0 && $c<0) {
	echo "Отрицательных значений 3";
}
elseif (($a<0 && $b<0) || ($a<0 && $c<0)|| ($b<0 && $c<0)) {
	echo "Отрицательных значений 2";
}
elseif ($a<0 || $b<0 || $c<0) {
	echo "Отрицательных значений 1";
}
else{
	echo "Отрицательных значений нет";
}
echo "<br>";

// Количество положительных значений


if ($a>0 && $b>0 && $c>0) {
	echo "Положительных значений 3";
}
elseif (($a>0 && $b>0) || ($a>0 && $c>0) || ($b>0 && $c>0)) {
	echo "Положительных значений 2";
}
elseif ($a>0 || $b>0 || $c>0) {
	echo "Положительных значений 1";
}
else{
	echo "Положительных значений нет";
}
echo "<br>";

// Количество четных чисел

if ($a%2==0 && $b%2==0 && $c%2==0) {
	echo "Четных чисел 3";
}
elseif (($a%2==0 && $b%2==0) || ($a%2==0 && $c%2==0)|| ($b%2==0 && $c%2==0)) {
	echo "Четных чисел 2";
}
elseif ($a%2==0 || $b%2==0 || $c%2==0) {
	echo "Четных чисел 1";
}
else{
	echo "Четных чисел нет";
}

echo "<br>";

// Количество нечетных чисел

if (($a%2!==0) && ($b%2!==0) && ($c%2!==0)) {
	echo "Нечетных чисел 3";
}
elseif (($a%2!==0 && $b%2!==0) || ($a%2!==0 && $c%2!==0)|| ($b%2!==0 && $c%2!==0)) {
	echo "Нечетных чисел 2";
}
elseif ($a%2!==0 || $b%2!==0 || $c%2!==0) {
	echo "Нечетных чисел 1";
}
else{
	echo "Нечетных чисел нет";
}
