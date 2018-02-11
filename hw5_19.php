<?php
/**
 * Created by PhpStorm.
 * User: denismoroz
 * Date: 09.02.18
 * Time: 18:17
 * ЗАДАНИЕ
 * 19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а текущий день
 * выведите курсивом. Текущий день должен храниться в переменной $day.
 */

$arr_days = ["sun","mon","tue","wen","thu","fri","sat"];
$day = "fri";
foreach  ($arr_days as $v) {
    if ($v==$day) {
        echo "<p><i>$v</i></p>";
    } else {
        echo "<p>$v</p>";

    }

}