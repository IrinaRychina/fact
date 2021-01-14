<?php
//3. Создайте форму генерации ссылки с параметром:
//Создайте форму и в ней добавьте поле со списком выбора – Лаб1, Лаб2, Лаб3, Лаб4
//При нажатии на кнопку должно быть сформирована ссылка следующего вида:
// phpcourse.php?l=3 , где 3 – это номер выбранной лабораторной работы.

$select = htmlspecialchars ($_POST["lab"]);
print_r($_POST);
?>
<form method="post">
    <p>
        <select name="lab">
            <option value="1">Лаб 1</option>
            <option value="2">Лаб 2</option>
            <option value="3">Лаб 3</option>
        </select>
        <input type="submit">
    </p>
</form>
<?echo "phpcourse.php?l=" . $select?>
<hr>

<?php
//1. Отправить логины и комментарии на почту
// (значения должны сохраняться вместо тестового документа на электронный адрес).
//*Так как мы отправляем e-mail на локальном сервере, то письма будут
// сохраняться в папку C:\OpenServer\userdata\temp\email

$login = $_POST['login'];
$password = $_POST['pass'];
$message = $login . $password;
$to = 'receiver@example.com';
$subject = 'authorization data';
mail( $to, $subject, $message);
?>

<form method="post">
    <p>login <input name="login"></p>
    <p>password<input type="password" name="pass"></p>
    <p><input type="submit"></p>
</form>
<hr>

<?php
//2. Создайте форму авторизации. Зашифруйте пароли и отправьте их на сервер.


$hashed_password = crypt($_POST['pass']);
$user_input = $_POST['userInputPass'];
if (hash_equals($hashed_password, crypt($user_input, $hashed_password))) {
    echo "Correct password!";
}
else{
    echo "Wrong password!";
}

?>
<form method="post">
    <p>login <input name="login"></p>
    <p>set password<input type="password" name="pass"></p>
    <p>check password<input type="password" name="userInputPass"></p>
    <p><input type="submit"></p>
</form>

<?php
//3. Создайте анкету на форме. Ответ на каждый из вопросов представьте с помощью переключателя («да» или «нет»).
// По умолчанию задайте везде значение «да».
//Напишите сценарий обработки анкеты: поставьте 1 балл, если был ответ «да» в вопросах
// с номерами 3, 9, 10, 13, 14, 19 и «нет» в вопросах с номерами 1, 2, 4, 5, 6, 7, 8, 11, 12, 15, 16, 17, 18.
// Посчитайте сумму набранных баллов:
//если она оказалась более 15, то результат: «У Вас покладистый характер»;
//если сумма в интервале от 8 до 15, то результат: «Вы не лишены недостатков, но с вами можно ладить»;
//если сумма менее 8 баллов, то результат: «Вашим друзьям можно посочувствовать».
//Отобразите на экране имя анкетируемого, фразу-результат анкетирования.
$name = $_POST['name'];
$result = array_sum ($_POST);
if ($result < 8)
{
    print("$name, Вашим друзьям можно посочувствовать");
}
else if ($result > 15)
{
    print("$name, У Вас покладистый характер");
}
else
{
    print("$name, Вы не лишены недостатков, но с вами можно ладить");
}
?>

<h2>Анкета</h2>
<form method="POST">
    <p>Введите имя:<br>
        <input type="text" name="name" /></p>
    <p>Считаете ли Вы, что у многих ваших знакомых хороший характер?</p>
    <p><input type="radio" name="question1" value="0" checked/>Да
        <input type="radio" name="question1" value="1"/>Нет</p>
    <p>Раздражают ли Вас мелкие повседневные обязанности?</p>
    <p><input type="radio" name="question2" value="0" checked/>Да
        <input type="radio" name="question2" value="1"/>Нет</p>
    <p>Верите ли Вы, что ваши друзья преданы Вам?</p>
    <p> <input type="radio" name="question3" value="1" checked/>Да
        <input type="radio" name="question3" value="0"/>Нет</p>
    <p>Неприятно ли Вам, когда незнакомый человек делает Вам замечание?</p>
    <p><input type="radio" name="question4" value="0" checked/>Да
        <input type="radio" name="question4" value="1"/>Нет</p>
    <p>Способны ли Вы ударить собаку или кошку?</p>
    <p><input type="radio" name="question5" value="0" checked/>Да
        <input type="radio" name="question5" value="1"/>Нет</p>
    <p>Часто ли Вы принимаете лекарства?</p>
    <p><input type="radio" name="question6" value="0" checked/>Да
        <input type="radio" name="question6" value="1"/>Нет</p>
    <p>Часто ли Вы меняете магазин, в который ходите за продуктами?</p>
    <p><input type="radio" name="question7" value="0" checked/>Да
        <input type="radio" name="question7" value="1"/>Нет</p>
    <p>Продолжаете ли Вы отстаивать свою точку зрения, поняв, что ошиблись?</p>
    <p><input type="radio" name="question8" value="0" checked/>Да
        <input type="radio" name="question8" value="1"/>Нет</p>
    <p>Тяготят ли Вас общественные обязанности?</p>
    <p><input type="radio" name="question9" value="1" checked/>Да
        <input type="radio" name="question9" value="0"/>Нет</p>
    <p>Способны ли Вы ждать более 5 минут, не проявляя беспокойства?</p>
    <p><input type="radio" name="question10" value="1" checked/>Да
        <input type="radio" name="question10" value="0"/>Нет</p>
    <p>Часто ли Вам приходят в голову мысли о Вашей невезучести?</p>
    <p><input type="radio" name="question11" value="0" checked/>Да
        <input type="radio" name="question11" value="1"/>Нет</p>
    <p>Сохранилась ли у Вас фигура по сравнению с прошлым?</p>
    <p><input type="radio" name="question12" value="0" checked/>Да
        <input type="radio" name="question12" value="1"/>Нет</p>
    <p>Можете ли Вы с улыбкой воспринимать подтрунивание друзей?</p>
    <p><input type="radio" name="question13" value="1" checked/>Да
        <input type="radio" name="question13" value="0"/>Нет</p>
    <p>Нравится ли Вам семейная жизнь?</p>
    <p><input type="radio" name="question14" value="1" checked/>Да
        <input type="radio" name="question14" value="0"/>Нет</p>
    <p>Злопамятны ли Вы?</p>
    <p><input type="radio" name="question15" value="0" checked/>Да
        <input type="radio" name="question15" value="1"/>Нет</p>
    <p>Находите ли Вы, что стоит погода, типичная для данного времени года?</p>
    <p><input type="radio" name="question16" value="0" checked/>Да
        <input type="radio" name="question16" value="1"/>Нет</p>
    <p>Случается ли Вам с утра быть в плохом настроении?</p>
    <p><input type="radio" name="question17" value="0" checked/>Да
        <input type="radio" name="question17" value="1"/>Нет</p>
    <p>Раздражает ли Вас современная живопись?</p>
    <p><input type="radio" name="question18" value="0" checked/>Да
        <input type="radio" name="question18" value="1"/>Нет</p>
    <p>Надоедает ли Вам присутствие чужих детей в доме более одного часа?</p>
    <p><input type="radio" name="question19" value="1" checked/>Да
        <input type="radio" name="question19" value="0"/>Нет</p>
    <p><input type="submit"></p>
</form>