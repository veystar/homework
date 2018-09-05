// 0) найти максимальный элемент массива

<?php
function getMax($arr)
{
$max = 0;
foreach ($arr as $value) {
   if ($value > $max)
        $max = $value;
}
    return $max;
}

// 1) Написать функцию которая выводит все положительные четные числа которые меньше заданного.

<?php
function getEvenNumbers($limit)
{
for ($i = 0; $i < $limit; $i+=2)
    echo $i, ' ';

}

// 2) Вывести определенное количество элементов  последовательности Фибоначчи.

<?php
function Fibo($count) {
    $fib1 = 0;
    $fib2 = 1;
    $fib = 0;
for ($i = 1; $i <= $count; $i++)
    {
        $fib = $fib1 + $fib2;
        $fib2 = $fib1;
        $fib1 = $fib;

        echo $fib, "\n";
    }

}

// 3) найти в массиве число, второе по величине.

<?php
function getSecond($arr)
{
$max = 0;
$second = 0;
foreach ($arr as $value) {
   if ($value > $max)   {
        $second = $max;
        $max = $value;
   } elseif ($value > $second && $value < $max)
        $second = $value;
                          }
    return $second;
}

// 4) В массиве заменить все элементы, большие данного числа Z, этим числом. Подсчитать количество замен.

<?php
function Replacer(&$inarray, $limit)
{
    $replaced = 0;
foreach ($inarray as &$value)
   if ($value > $limit) {
        $value = $limit;
        $replaced++;
   }
    return $replaced;
}
