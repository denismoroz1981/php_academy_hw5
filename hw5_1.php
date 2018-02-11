<?php
/**
 * Created by PhpStorm.
 * User: denismoroz
 * Date: 07.02.18
 * Time: 19:07
 * ЗАДАНИЕ
 * 1. Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите
 * эти слова в столбик.
 *
 */

$arr = ["html","css","php","js","jq"];
foreach ($arr as $v) {
    echo "<p>".var_export($v,1)."</p>";


}