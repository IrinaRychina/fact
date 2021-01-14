<?php

session_start();
// если нажата кнопка выйти, то закрыть сессию
if($_GET['do'] == 'logout'){
    unset($_SESSION['admin']);
    session_destroy();
}
//если пользователь не авторизован, то отправим его на страницу login.php
if ($_SESSION['admin'] != "admin" or $_SESSION['admin'] != "user"){
    header("Location: login.php");
//    завершаем выполнение скрипта
    exit;
}
?>
Вы авторизованы !!!
<p><a href="fact.php">fact.php</a></p>
<p><a href="bitrix.php">bitrix.php</a></p>
<p><a href="index.php?do=logout">Выйти</a></p>

<?php
//3. Создайте список с выпадающим цветом. Задний фон сайта должен окрашиваться в выбранный цвет из списка.
// Если пользователе покинет сайт и заново войдет, нужно окрасить сайт в тот цвет, который был выбран последним.
?>