<?php
$arr = [1, 3, 7, 9, 10];
echo array_sum($arr) / count($arr); 
echo "\n";

echo array_sum(range(1, 100)); 
echo "\n";

$arr = [4, 9, 16, 25];
$result = array_map('sqrt', $arr);
print_r($result); 
echo "\n";

$letters = range('a', 'z');
$numbers = range(1, 26);
$result = array_combine($letters, $numbers);
print_r($result); 
echo "\n";

$str = '1234567890';
$arr = str_split($str, 2);
echo array_sum($arr); 