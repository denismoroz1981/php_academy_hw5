<?php
/**
 * Created by PhpStorm.
 * User: denismoroz
 * Date: 10.02.18
 * Time: 21:13
 * ЗАДАНИЕ
 * 24. Вам нужно разработать программу, которая считала бы количество вхождений какой­нибуть
 * выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе
 * 442158755745 встречается 4 раза.
 */

$digit_number = rand(1,20);
$number = 0;
for ($i=0;$i<=$digit_number-1;$i++) {
    $number += rand(0,9) * pow(10,$i);
}
echo "<p>Your number to search in is {$number}</p>";
$digit = rand(0,9);
echo "<p>Your figure to count is {$digit}</p>";

$count=0;
$number = (string) $number;
for ($i=0;$i<=strlen($number)-1;$i++) {
    if ($number[$i]==$digit) {
        $count += 1;
    }

}
echo "<p>Your figure {$digit} was found in number {$number} exactly {$count} times.</p>";