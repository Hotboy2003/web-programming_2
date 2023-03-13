<?php
$a = 10;
$b = 3;
$remainder = $a % $b;
echo "Остаток от деления $a на $b равен: $remainder";
echo "\n";

$st = 2 ** 10;
echo "2 в 10 степени равно: $st";
echo "\n";
$num = 245;
$sqrt = sqrt($num);
echo "Квадратный корень из $num равен: $sqrt";
echo "\n";

$array = array(4, 2, 5, 19, 13, 0, 10);
$sum_of_squares = 0;
foreach ($array as $number) {
  $sum_of_squares += $number ** 2;
}
$sqrt = sqrt($sum_of_squares);
echo "Корень из суммы квадратов элементов массива равен: $sqrt";
echo "\n";


$num = 379;
$sqrt = sqrt($num);
$rounded_int = round($sqrt); // округление до целых
$rounded_tenth = round($sqrt, 1); // округление до десятых
$rounded_hundredth = round($sqrt, 2); // округление до сотых
echo "Квадратный корень из $num равен: $sqrt (до целых: $rounded_int, до десятых: $rounded_tenth, до сотых: $rounded_hundredth)";
echo "\n";


$num = 587;
$sqrt = sqrt($num);
$rounded_array = array(
  'floor' => floor($sqrt), // округление до меньшего целого
  'ceil' => ceil($sqrt) // округление до большего целого
);
echo "Квадратный корень из $num равен: $sqrt (округление в меньшую сторону: {$rounded_array['floor']}, округление в большую сторону: {$rounded_array['ceil']})";
echo "\n";


$numbers = array(4, -2, 5, 19, -130, 0, 10);
$min = min($numbers);
$max = max($numbers);
echo "Минимальное число: $min, Максимальное число: $max";
echo "\n";
$random_num = rand(1, 100);
echo "Случайное число от 1 до 100: $random_num";
echo "\n";
$random_nums = array();
for ($i = 0; $i < 10; $i++) {
  $random_nums[] = rand(1, 100);
}
// выводим получившийся массив для проверки
echo "Случайные числа в массиве: " . implode(', ', $random_nums);
echo "\n";


$a = 5;
$b = -3;
$diff = abs($a - $b);
echo "Модуль разности чисел $a и $b равен $diff";
echo "\n";
$arr = array(1, 2, -1, -2, 3, -3);
$new_arr = array();
foreach ($arr as $num) {
  $new_arr[] = abs($num);
}
// выводим получившийся массив для проверки
echo "Новый массив: " . implode(', ', $new_arr);
echo "\n";


$num = 30;
$divisors = array();
for ($i = 1; $i <= $num; $i++) {
  if ($num % $i == 0) {
    $divisors[] = $i;
  }
}
// выводим получившийся массив для проверки
echo "Делители числа $num: " . implode(', ', $divisors);
echo "\n";

$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$sum = 0;
$cnt = 0;
for ($i = 0; $i < count($arr); $i++) {
  $sum += $arr[$i];
  $cnt++;
  if ($sum > 10) {
    break;
  }
}
echo "Количество элементов массива, необходимых для получения суммы больше 10: $cnt";