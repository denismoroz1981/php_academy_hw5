<?php
/**
 * Created by PhpStorm.
 * User: denismoroz
 * Date: 10.02.18
 * Time: 20:43
 * Обработчик для hw5_24.html
 */


$str = $_GET["text1"];

if (ctype_digit($str)) {

$sum = 0;
for ($i =0;$i<=strlen($str)-1; $i++){
    $sum += (int) $str[$i];}

    echo "<p>Сумма цифр равна {$sum}</p>";

} else {
    echo "<p>Неправильный формат!</p>";

}
?>