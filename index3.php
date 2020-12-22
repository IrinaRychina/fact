<?php
for ($i = 5; $i < 14; $i++) {
    print $i . '<br>';
}


$num = 1000;
$count = 0;
while ($num > 50) {
    $num = $num / 2;
    ++$count;
}
print $count . '<br>';
for ($i = 0; $i < 5; $i++) {
    $num = $num / 2;
}



$i = 10;
switch ($i) {
    case '0':
        print '0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10';
        break;
    case '1':
        print '0, 1, 2, 3, 4, 5, 6, 7, 8, 9';
        break;
    case '2':
        print '0, 1, 2, 3, 4, 5, 6, 7, 8';
        break;
    case '3':
        print '0, 1, 2, 3, 4, 5, 6, 7';
        break;
    case '4':
        print '0, 1, 2, 3, 4, 5, 6';
        break;
    case '5':
        print '0, 1, 2, 3, 4, 5';
        break;
    case '6':
        print '0, 1, 2, 3, 4';
        break;
    case '7':
        print '0, 1, 2, 3';
        break;
    case '8':
        print '0, 1, 2';
        break;
    case '9':
        print '0, 1';
        break;
    case '10':
        print '0';
        break;
}