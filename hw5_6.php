<?php
/**
 * Created by PhpStorm.
 * User: denismoroz
 * Date: 08.02.18
 * Time: 20:14
 * ЗАДАНИЕ
 * 6. Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en,
 * а русские — в массив $ru. $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
 * $en = array('green', 'red','blue'); $ru = array('зеленый', 'красный', 'голубой');
 */

$arr = array('green'=>'зеленый','red'=>'красный','blue'=>'голубой');
$ru=$en=[];
foreach ($arr as $k=>$v) {
    $ru[]=$v;
    array_push($en,$v);

}

echo "\$ru array";
echo "<br>";
echo var_export($ru);
echo "<br>";
echo "\$en array";
echo "<br>";
echo var_export($en);
