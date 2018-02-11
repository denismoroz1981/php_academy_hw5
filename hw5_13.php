<?php
/**
 * Created by PhpStorm.
 * User: denismoroz
 * Date: 08.02.18
 * Time: 20:52
 * ЗАДАНИЕ
 * 13. Вывести таблицу умножения
 */

echo "<p><b>Таблица умножения</b></p>\n";
for ($i=1;$i<=9;$i++) {
    echo "<p>Умножение на {$i}</p>";
    for ($j=$i;$j<=9;$j++) {
        echo "<p>{$i} * {$j} = ".var_export($i*$j,1)."</p>";
            }
            echo "<br>";
}
