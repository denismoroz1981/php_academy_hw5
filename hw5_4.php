<?php
/**
 * Created by PhpStorm.
 * User: denismoroz
 * Date: 08.02.18
 * Time: 20:03
 * ЗАДАНИЕ
 * 4. Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей,
 * с помощью второго — столбец элементов.
 * $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
 */


$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
echo "<p> Столбец ключей </p>";
foreach ($arr as $k => $v) {
    echo $k;
    echo "<br>";

}
echo "<br>";
echo "<p> Столбец элементов: </p>";
foreach ($arr as $k => $v) {
    echo $v;
    echo "<br>";

}
