<?php
/**
 * Created by PhpStorm.
 * User: denismoroz
 * Date: 09.02.18
 * Time: 18:19
 * ЗАДАНИЕ
 * 0.Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20 рядов,
 * а не 5.

x
xx
xxx
xxxx
xxxxx
 */

for ($i=1;$i<=20;$i++) {
$s = str_repeat("x",$i);
    echo "$s<br>";
};
?>