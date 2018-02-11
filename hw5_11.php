<?php
/**
 * Created by PhpStorm.
 * User: denismoroz
 * Date: 08.02.18
 * Time: 20:42
 * ЗАДАНИЕ
 * Выведите столбец четных чисел в промежутке от нуля до 100.
 */

for ($i=0;$i<=100;$i++) {

    if ($i%2==0) {
        echo "<p>$i</p>";
    }
}