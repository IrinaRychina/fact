<?php
//1. Создайте функцию, которая принимает одномерный массив и
// возвращает массив, заполненный случайными числами.

function rand_array(&$input_array)
{
    foreach ($input_array as &$value)
    {
        $value = rand(0, 100);
    }
    return $input_array;
}
$example_array1 = [0, 2, 4, 6, 8, 10];
print_r(rand_array($example_array1));


echo '<hr>';
//2. Дана строка «HTML, CSS, PHP, BITRIX».
// Написать функцию, которая посчитает количество слов строке.

$str2 = "HTML, CSS, PHP, BITRIX";
function get_words_number($input_string)
{
    return count(explode(' ', $input_string));
}
echo get_words_number($str2);



echo '<hr>';
//3. Дана строка «HTML, CSS, PHP, BITRIX».
//Написать функцию, которая выведет в обратном порядке буквы («XIRTIB ,PHP … »).

$str3 = "HTML, CSS, PHP, BITRIX";
function print_reverse_string($input_string)
{
    $input_string = str_split($input_string);
    $input_string = array_reverse($input_string);
    $input_string = implode("", $input_string);
    echo $input_string;
}
print_reverse_string($str3);


echo '<hr>';
//4. Дана строка «HTML, CSS, PHP, BITRIX».
// Написать функцию, которая выведет на экран длину строки.

$str4 = "HTML, CSS, PHP, BITRIX";
function get_symbols_number($input_string)
{
    $input_string_to_array = str_split($input_string);
    return count($input_string_to_array);
}
echo get_symbols_number($str4);


echo '<hr>';

//5. Дана строка «HTML, CSS, PHP, BITRIX».
// Написать функцию, которая выведет каждую букву на новую строку
$str5 = "HTML, CSS, PHP, BITRIX";
function vertical_string($input_string)
{
    $input_string_to_array = str_split($input_string);
    foreach ($input_string_to_array as $value)
    {
        echo $value . '<br>';
    }

}
vertical_string($str5);