<?php
function printStringReturnNumber($str) {
  echo $str;
  return 42; // любое число, которое нужно вернуть
}

// вызываем функцию и записываем результат в переменную $my_num
$my_num = printStringReturnNumber("Привет, я функция!\n");

// выводим значение переменной $my_num
echo "Результат работы функции: " . $my_num;