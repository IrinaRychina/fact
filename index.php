<?php
require_once "authClass.php";
$hostname = 'localhost';
$username = 'Irina';
$password = '1234';
$dbname = 'city';

//1. Выполнить запросы на удаление строки из таблицы Name
$dbconnect = mysqli_connect($hostname, $username, $password, $dbname);
$sql1 = mysqli_query($dbconnect,"DELETE FROM `name` WHERE ID_person = 1");

//2. Создать авторизацию пользователя. Необходимо создать новую БД,
// в которой предусмотреть таблицу для хранения информации ο пользователе (имя, фамилия, возраст), логин и пароль.
// Создать страницу index.php, на которой реализовать форму авторизации. Как только пользователей вводит логин и
//пароль, происходит проверка логина и пароля из БД. Если пользователь ввел правильные данные, открывается страница
//https://fact.digital/.  Если пользователь ввел неверные данные, на странице выходит ошибка авторизации.
//При создании формы авторизации проработать дизайн и стиль страницы.
$dbconnect2 = mysqli_connect($hostname, $username, $password);
$db_selected = mysqli_select_db($dbconnect2, 'Users');

//admin - пароль 1234
//bob - пароль 5678
//homer - пароль 9421
$auth1 = new Auth();
$auth1->auth_method($dbconnect2);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="ribbon"></div>
<div class="login">
    <h1>Let's get started.</h1>
    <p>This will be an amazing experience</p>
    </form>

    <form method="POST">
        <div class="input">
            <div class="blockinput">
                <i class="icon-envelope-alt"></i><input name="login" type="text" placeholder="Login" required>
            </div>
            <div class="blockinput">
                <i class="icon-unlock"></i><input name="password" type="password" placeholder="Password" required>
            </div>
        </div>
        <button name="submit" type="submit" value="Log_in">Login</button>
    </form>
</div>
</body>
</html>