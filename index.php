<?php
//2. Дан файл style.css, в котором указаны цвета (созданы правила для фона, для блоков и т.д.).
//Необходимо найти цвет в style.css и перенсти его на страницу index.php.
//На странице index.php окрасить блоки или сделать выпадающий список цветом.

$filename = "style.css";
$handle = fopen($filename, "r");
$contents = fread($handle, 1);
$colors_array = [];
while ($contents != null)
{
    if ($contents == '#'){
        $colors_array[] = $contents . fread($handle, 6);
    }
    $contents = fread($handle, 1);
}
print($colors_array[0]);
print($colors_array[1]);
print($colors_array[2]);
?>

<select style="background-color: <?echo $colors_array[0];?>">
    <option style="background-color: <?echo $colors_array[0];?>">Желтый</option>
    <option style="background-color: <?echo $colors_array[1];?>">Красный</option>
    <option style="background-color: <?echo $colors_array[2];?>">Голубой</option>
</select>
