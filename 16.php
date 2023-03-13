<?php

// функция, которая добавляет восклицательный знак к строке
function increaseEnthusiasm($str) {
  return $str . "!";
}

// вызываем функцию increaseEnthusiasm() со строкой и выводим результат в консоль
echo increaseEnthusiasm("Привет, мир") . "\n";

// функция, которая повторяет строку три раза
function repeatThreeTimes($str) {
  return $str . $str . $str;
}

// вызываем функцию repeatThreeTimes() со строкой и выводим результат в консоль
echo repeatThreeTimes("I love Math! ") . "\n";

// вызываем функцию increaseEnthusiasm() с результатом вызова функции repeatThreeTimes() в качестве аргумента
echo increaseEnthusiasm(repeatThreeTimes("Diffurs is amazing!")) . "\n";

// функция, которая обрезает строку до указанной длины
function cut($str, $length = 10) {
  return substr($str, 0, $length); // используем функцию substr для обрезания строки
}

// вызываем функцию cut() со строкой и длиной, равной 5
echo cut("abcdefghijklmnopqrstuvwxyz", 5) . "\n"; // выведет "abcde"

// вызываем функцию cut() со строкой, но без указания длины (используется значение по умолчанию, равное 10)
echo cut("abcdefghijklmnopqrstuvwxyz") . "\n"; // выведет "abcdefghij"


// функция, которая выводит элементы массива последовательно, используя рекурсию
function printArray($arr, $i = 0) {
  if ($i < count($arr)) {
    echo $arr[$i] . "\n";
    printArray($arr, $i + 1); // рекурсивно вызываем printArray() с индексом, увеличенным на 1
  }
}

// вызываем функцию printArray() с массивом чисел
printArray([1, 2, 3, 4, 5, 6]) . "\n";

// функция, которая суммирует цифры числа до тех пор, пока сумма не станет однозначной
function getSingleDigit($num) {
  $sum = 0;
  
  // считаем сумму цифр числа
  while ($num > 0) {
    $sum += $num % 10;
    $num = (int) ($num / 10);
  }
  
  // проверяем, однозначное ли число получилось
  if ($sum <= 9) {
    return $sum;
  } else {
    return getSingleDigit($sum); // рекурсивно вызываем функцию, передавая сумму в качестве аргумента
  }
}

// вызываем функцию getSingleDigit() с числом 123456
echo getSingleDigit(123456) . "\n"; // выведет 3