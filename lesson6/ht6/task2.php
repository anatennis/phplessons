<?php
/*Задание 2
Простая система аутентификации по логин/паролю.
Для хранения информации о пользователе использовать CSV файл.
Пример записи:
username;password;sess_id
username;password;sess_id
username;password;sess_id

Имя пользователя должно быть уникальными.
1)Сверстать HTML-форму для регистрации нового пользователя.
2)Написать обработчик регистрационной формы:
операция добавить нового пользователя в файл.
Логин пользователя должен быть уникальным
(реализовать функцию поиска совпадений по имени пользователя).
3)Сверстать HTML-форму входа пользователя на сайт.
4)Написать обработчик формы входа,
который будет проверять существование пользователя в файле,
сверять введенный хеш пароля и хеш из файла на равенство.
Посмотрите функции password_hash() и password_verify() */
session_start();
function getUsername($user) {
    $arr = explode(";", $user);
    return $arr[0];
}

function findUsername($username) {
    $datafile = 'data.csv';
    $users = file($datafile, FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES);
    for ($i=0; $i<count($users); $i++) {
        if ($username == getUsername($users[$i])) {
           // echo "Такой логин уже существует";
            return true;
        }
    }
    return false;
}

function addNewUser() {
    $post = $_POST;
    $datafile = 'data.csv';
    if ($post == null) { return false; }
    if (!findUsername($post['login'])) {
        $hashpwd = password_hash($post['pwd'], PASSWORD_DEFAULT);
        $user = $post['login'].';'.$hashpwd.';'.session_id()."\r\n";
        file_put_contents($datafile, $user, FILE_APPEND);
        header('location: task4_auth.php');
        exit;
        //return true;
    } else {
        echo "<h2>Пользователь с таким логином уже существует</h2>";
    }

}

addNewUser();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="css/css1.css">
    <link rel="stylesheet" href="css/grid.css">
</head>
<body id="bR" class="offset-3a2">

<div>
    <a href="#registrF">
        <input type="button" class="openRF" value="Зарегистрироваться">
    </a>
</div>

<form id="registrF" action="task2.php" method="post">
    <fieldset>
        <legend class="sh" align="center"> Регистрация: </legend>

        <fieldset style="background-color: #b3d4fc">
            <div>
                <legend class="sh" align="center"> Придумайте логин и пароль: </legend>
                <input name="login" class="inpData" type="text" minlength="1"
                       maxlength="25" placeholder=" Логин">
            </div>
            <div>
                <input name="pwd" class="inpData" required type="password" placeholder="  Пароль">
            </div>
            <div>
                <input class="inpData" required type="password" placeholder="  Пароль еще раз">
            </div>
            <p class="podsk">
                <label><input name="smth" type="checkbox"></label>
                Я даю согласие на обработку и хранение моих персональных данных
            </p>
            <div align="center">
                <label class="sh">
                    <a href="#registrFclose"><input type="submit" class="butNew" value="Зарегистрироваться"></a>
                </label>
            </div>


        </fieldset>
    </fieldset>
</form>

</body>
</html>
