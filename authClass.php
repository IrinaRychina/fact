<?php
class Auth
{
    public $login;
    public $password;

    public function __construct()
    {
        $this->login = $_POST['login'];
        $this->password = $_POST['password'];
    }

    public function auth_method($dbconnect)
    {
        if(isset($_POST['submit']))
        {
            // функция mysqli_real_escape_string используется для создания допустимых в SQL строк, которые можно использовать в SQL выражениях.
            $query = mysqli_query($dbconnect,"SELECT user_login, user_password_hash FROM users WHERE user_login='".mysqli_real_escape_string($dbconnect,$_POST['login'])."' LIMIT 1");
            // mysqli_fetch_assoc - Извлекает результирующий ряд в виде ассоциативного массива
            $data = mysqli_fetch_assoc($query);

            // Сравниваем пароли
            if($data['user_password_hash'] === md5($_POST['password']) and $data['user_login'] === $_POST['login'])
            {
                header("Location: https://fact.digital/");
                exit();
            }
            else
            {
                echo "<script type='text/javascript'>alert('Вы ввели неправильный логин или пароль');</script>";
            }
        }
    }
}