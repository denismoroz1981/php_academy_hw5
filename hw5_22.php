<?php
/**
 * Created by PhpStorm.
 * User: denismoroz
 * Date: 09.02.18
 * Time: 18:28
 * ЗАДАНИЕ
 * 22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.
 *
 * <br><br>
xx<br>
xxxx<br>
xxxxxx<br>
xxxxxxxx<br>
xxxxxxxxxx</p>

 */

for ($i=2;$i<=10;$i+=2) {
    $s = str_repeat("x",$i);
    echo "$s<br>".PHP_EOL;
};