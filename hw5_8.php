<?php
/**
 * Created by PhpStorm.
 * User: denismoroz
 * Date: 08.02.18
 * Time: 20:32
 * ЗАДАНИЕ
 * 8. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте строку
 * '­1­2­3­4­5­6­7­8­9­'. Циклы while и for
 */

$arr=[1,2,3,4,5,6,7,8,9];
$str = "-";
foreach ($arr as $v) {
    $str .= $v."-";
}

echo $str;