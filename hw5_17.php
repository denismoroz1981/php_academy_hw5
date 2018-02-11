<?php
/**
 * Created by PhpStorm.
 * User: denismoroz
 * Date: 09.02.18
 * Time: 18:02
 * ЗАДАНИЕ
 * 17.Сосктавьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий месяц
 * выведите жирным. Текущий месяц должен храниться в переменной $month.
 */

$arr_month = ["jan","feb","mar","apr","may","jun","jul","aug","sep","nov","dec"];
$month = "feb";

foreach ($arr_month as $v) {
    if ($v == $month) {
        echo "<p><b>$v</b></p>";
    } else {
        echo "<p>$v</p>";
    }


}