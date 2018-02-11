<?php
/**
 * Created by PhpStorm.
 * User: denismoroz
 * Date: 09.02.18
 * Time: 18:13
 * ЗАДАНИЕ
 * 18. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, выходные дни
 * следует вывести жирным.
 */

$arr_days = ["sun","mon","tue","wen","thu","fri","sat"];
$arr_weekend = ["sun","sat"];
foreach  ($arr_days as $v) {
    if (in_array($v,$arr_weekend)) {
        echo "<p><b>$v</b></p>";
    } else {
        echo "<p>$v</p>";

    }

}