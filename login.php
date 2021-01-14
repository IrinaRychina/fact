<?php

//2. К задаче с авторизацией добавить две страницы (fact.php, bitrix.php).
//Необходимо запоминать последнюю посещенную страницу (либо fact.php, либо bitrix.php).
//После авторизации пользователя, необходимо вывести на экран, какая страница была посещена последней.

$hashed_password = crypt($_POST['pass']);
$user_input = $_POST['userInputPass'];
if (hash_equals($hashed_password, crypt($user_input, $hashed_password))) {
    echo "Correct password!";
} else {
    echo "Wrong password!";
}?>

<form method="post">
    <p>login <input name="login"></p>
    <p>set password<input type="password" name="pass"></p>
    <p>check password<input type="password" name="userInputPass"></p>
    <p><input type="submit"></p>
</form>
