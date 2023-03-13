<?php
$arr = [];
for ($i = 1; $i <= 5; $i++) {
  $arr[] = str_repeat("x", $i);
}
print_r($arr);
echo "\n";

function arrayFill($value, $count) {
  $result = [];
  for ($i = 0; $i < $count; $i++) {
    $result[] = $value;
  }
  return $result;
}

$arr = arrayFill('x', 5);
print_r($arr); // выведет ['x', 'x', 'x', 'x', 'x']
echo "\n";

$arr = [[1, 2, 3], [4, 5], [6]];
$sum = 0;
foreach ($arr as $subArr) {
  $sum += array_sum($subArr);
}
echo $sum; // выведет 21
echo "\n";

$arr = [2, 5, 3, 9];
$result = ($arr[0] * $arr[1]) + ($arr[2] * $arr[3]);
echo $result; // выведет 37
echo "\n";

$user = [
  'name' => 'Иван',
  'surname' => 'Иванов',
  'patronymic' => 'Иванович'
];
echo $user['surname'] . ' ' . $user['name'] . ' ' . $user['patronymic']; // выведет "Иванов Иван Иванович"
echo "\n";

$date = [
  'year' => date('Y'),
  'month' => date('m'),
  'day' => date('d')
];
echo $date['year'] . '-' . $date['month'] . '-' . $date['day']; // выведет текущую дату в формате "год-месяц-день"
echo "\n";

$arr = ['a', 'b', 'c', 'd', 'e'];
echo count($arr); // выведет 
echo "\n";
echo end($arr); // выведет 'e'
echo "\n";
echo prev($arr); // выведет 'd'
