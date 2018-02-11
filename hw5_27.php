<?php
/**
 * Created by PhpStorm.
 * User: denismoroz
 * Date: 11.02.18
 * Time: 17:11
 * ЗАДАНИЕ
 * 27. Создать генератор случайных таблиц. Есть переменные: $row - кол-во строк в таблице,
 * $cols - кол-во столбцов в таблице. Есть список цветов, в массиве:
 * $colors = array('red','yellow','blue','gray','maroon','brown','green').
 * Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols,
 * в которой все ячейки будут иметь цвета, выбранные случайным образом из массива $colors.
 * В каждой ячейке должно находиться случайное число.
 */

$row = rand(2,15);
$cols = rand(2,15);
$colors = array('red','yellow','blue','gray','maroon','brown','green');

echo "<table>";
for ($i=0;$i<$row;$i++) {
    echo "<tr>";
        for ($j=0;$j<$cols;$j++) {
            shuffle($colors);
            echo "<td bgcolor=$colors[0]>".var_export(rand(),1)."</td>";
        }
    echo "</tr>";
}
echo "</table>";
