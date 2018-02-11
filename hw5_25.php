<?php
/**
 * Created by PhpStorm.
 * User: denismoroz
 * Date: 10.02.18
 * Time: 21:30
 * ЗАДАНИЕ
 * 25. Ваше задание создать массив, наполнить это случайными значениями (функция rand),
 * найти максимальное и минимальное значение и поменять их местами.
 */

$number = rand(1,20);
$arr = [];
for ($i=0;$i<=$number-1;$i++) {
    $arr[] = rand(0,100);

}

$max = max($arr);
$min = min($arr);

echo "<p>Массив:</p>";
echo print_r($arr);
echo "<p>Максимальное значение: {$max}</p>";
echo "<p>Минимальное значение: {$min}</p>";

for ($i=0;$i<=$number-1;$i++) {
    if ($arr[$i] == $max) {$arr[$i]=$min; continue;}
    if ($arr[$i] == $min) {$arr[$i]=$max;}
}
echo "<p>Измененный массив:</p>";
echo print_r($arr);