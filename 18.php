<?php
function sumMoreThanTen($a, $b) {
  return ($a + $b) > 10;
}

var_dump(sumMoreThanTen(5, 7)); // будет выведено true
var_dump(sumMoreThanTen(2, 3)); // будет выведено false
echo "\n";

function checkEquality($a, $b) {
  return $a == $b;
}

var_dump(checkEquality(5, 5)); // будет выведено true
var_dump(checkEquality(2, 3)); // будет выведено false
echo "\n";

echo $test == 0 ? 'верно' : '';
echo "\n";

$age = 42;
if ($age < 10 || $age > 99) {
  echo 'Число не попадает в указанный диапазон';
} else {
  $sum = array_sum(str_split($age));
  echo $sum <= 9 ? 'Сумма цифр однозначна' : 'Сумма цифр двузначна';
}
echo "\n";

$arr = [1, 2, 3];
if (count($arr) == 3) {
  echo array_sum($arr);
} else {
  echo 'Массив не содержит 3 элемента';
}