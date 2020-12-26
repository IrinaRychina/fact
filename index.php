<?php
//5. Дана строка. Проверьте,
// что она заканчивается на '.png'. Если это так, выведите 'да', если не так - 'нет'.
$str5 = "hello.pngm.png";
$png = ".png";
$flag = mb_strpos ( $str5, $png , -4);
if ($flag)
{
    echo 'да';
}
else{
    echo 'нет';
}
echo '<hr>';

//1. Дана строка. Если в этой строке более 5-ти символов - вырежете из нее первые 5 символов,
//добавьте троеточие в конец и выведите на экран.
//Если же в этой строке 5 и менее символов - просто выведите эту строку на экран.

$str11 = "dialog!";
$str12 = "mir";
if (mb_strlen($str11) > 5)
{
    echo mb_substr($str11, 0, 5) . '...';
}
else {
    echo $str11;
}
echo '<br>';
if (mb_strlen($str12) > 5)
{
    echo mb_substr($str12, 0, 5) . '...';
}
else {
    echo $str12;
}


echo '<hr>';
//2. Дана строка $str. Замените в ней все буквы 'a' на цифру 1,
// буквы 'b' - на 2, а буквы 'c' - на 3.
$str2 = "analog bubble class";
echo str_replace(array('a', 'b', 'c'), array(1, 2, 3), $str2);


echo '<hr>';
//3. Дана строка 'abc abc abc'. Определите позицию последней буквы 'b'.
$str3 = 'abc abc abc';
$position = strpos($str3, 'b', -4);
echo $position;

echo '<hr>';
//4.Дана строка 'html css php'.
// С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива.
$str4 = 'html css php';
$arr4 = explode(' ', $str4);
print_r($arr4);

echo '<hr>';
//5. В двух строках содержатся даты вида
// День-Месяц-Год (например, 10-02-2015).
// Определите количество дней между датами.
$str51 = '10-02-2015';
$str52 = '10-02-2016';
$str51 = new DateTime('10-02-2015');
$str52 = new DateTime('10-02-2016');
$interval = $str51->diff($str52);
echo $interval->format('%R%a дней');
