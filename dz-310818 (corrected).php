// 0) найти максимальный элемент массива

<?php
function getMax($arr)
{
$max = $arr[0]; // не будет работать для отрицательных чисел. лучше всего сделать максимальным первый элемент массива. $max = $arr[0];
// но тогда его лучше пропустить в цикле.
foreach ($arr as $value) {
   if ($value > $max)
        $max = $value;
}
    return $max;
}

// 1) Написать функцию которая выводит все положительные четные числа которые меньше заданного.

function getEvenNumbers($limit)
{
for ($i = 0; $i < $limit; $i+=2)
    echo $i, ' ';  // раз уже сделал функциями. сделай return в каждой

}

// 2) Вывести определенное количество элементов  последовательности Фибоначчи.

function fibo($count) { //функции нельзя называть с большой быквы. так не принято
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

} // попробуй сделать используя массивы. с меньшим количеством присваниваний.

// 3) найти в массиве число, второе по величине.

function getSecond($arr)
{
$max = 0;
$second = 0;
foreach ($arr as $value) {
   if ($value > $max)   {
        $second = $max;
        $max = $value;
   } elseif ($value > $second && $value < $max)  // без этой проверки работает некорректно!
        $second = $value;
                          }
    return $second;
}

// 4) В массиве заменить все элементы, большие данного числа Z, этим числом. Подсчитать количество замен.

function Replacer(&$array, $limit) // inarray не очень название. лучше просто array
{
    $replaced = 0;
foreach ($array as &$value)
   if ($value > $limit) {
        $value = $limit;
        $replaced++;
   }
    return $replaced;
}
