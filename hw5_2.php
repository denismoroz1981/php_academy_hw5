<?php
/**
 * Created by PhpStorm.
 * User: denismoroz
 * Date: 07.02.18
 * Time: 19:39
 * Задание
 * 2. Дан массив с элементами 1, 20, 15, 17, 24, 35. С помощью цикла foreach найдите сумму элементов
 * этого массива. Запишите ее в переменную $result.
 *
 */

$arr = [1,20,15,17,24,35];
$result = 0;
foreach ($arr as $v) {
    $result += $v;

}

echo "<p> сумма массива: ".$result."</p>";