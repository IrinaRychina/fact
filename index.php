<?php

//1. Дана строка. Если в этой строке более 5-ти символов - вырежете из нее первые 5 символов,
//добавьте троеточие в конец и выведите на экран.
//Если же в этой строке 5 и менее символов - просто выведите эту строку на экран.

$str11 = "dialog!";
$str12 = "mir";
function five_symbols($str)
{
    if (mb_strlen($str) > 5)
    {
        echo mb_substr($str, 0, 5) . '...';
    }
    else {
        echo $str;
    }
}
five_symbols($str11);
echo '<br>';
five_symbols($str12);

echo '<hr>';
//2. Дана строка $str. Замените в ней все буквы 'a' на цифру 1,
// буквы 'b' - на 2, а буквы 'c' - на 3.
$str2 = "analog bubble class";
function replace_symbols($str)
{
    echo str_replace(array('a', 'b', 'c'), array(1, 2, 3), $str);
}
replace_symbols($str2);
echo '<hr>';

//3. Дана строка 'abc abc abc'. Определите позицию последней буквы 'b'.
$str3 = 'abc abc abc';
function find_position($str)
{
    return strpos($str, 'b', -4);
}
$position = find_position($str3);
echo $position;

echo '<hr>';
//4.Дана строка 'html css php'.
// С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива.
$str4 = 'html css php';
function explode_example($str)
{
    return explode(' ', $str);
}
$arr4 = explode_example($str4);
print_r($arr4);

echo '<hr>';
//5. В двух строках содержатся даты вида
// День-Месяц-Год (например, 10-02-2015).
// Определите количество дней между датами.
$str51 = new DateTime('10-02-2015');
$str52 = new DateTime('10-02-2016');
function find_difference($str1, $str2)
{
    return $str1->diff($str2);
}
$interval = find_difference($str51, $str52);
echo $interval->format('%R%a дней');