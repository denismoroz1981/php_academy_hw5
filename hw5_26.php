<?php
/**
 * Created by PhpStorm.
 * User: denismoroz
 * Date: 11.02.18
 * Time: 16:49
 * ЗАДАНИЕ
 * 26. Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand).
 * Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные индексы.
 * После вывести на экран элементы, которые больше ноля и у которых не парный индекс.
 */

$arr = [];
$arr_lenth = rand(1,30);
for ($i=0; $i<$arr_lenth;$i++) {
    $arr[] = rand(1,100);

}

echo "<p>Массив:</p>";
echo "<p>".print_r($arr)."</p>";

$product = 1;

for ($i=0; $i<$arr_lenth;$i+=2) {
    if ($arr[$i] > 0) {
        $product *= $arr[$i];
    }
}
echo "<p>Произведение парных элементов равно {$product}</p><br>";

echo "<p>Непарные элементы массива, которые больше нуля:</p>";

for ($i=1; $i<$arr_lenth;$i+=2) {
    if ($arr[$i] > 0) {
        echo "{$arr[$i]}, ";
    }
}

