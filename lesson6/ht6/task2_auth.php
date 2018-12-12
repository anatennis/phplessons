<?php
/*3)Сверстать HTML-форму входа пользователя на сайт.
4)Написать обработчик формы входа,
который будет проверять существование пользователя в файле,
сверять введенный хеш пароля и хеш из файла на равенство.
Посмотрите функции password_hash() и password_verify()
5)Создать закрытую страницу сайта, которая будет доступна только тем пользователям,
которые прошли регистрацию и выполнили вход на сайт.
Посмотрите функцию header("Location: адрес");
6) Реализовать возможность разлогиниться */
session_start();
function getUsername($user) {
    $arr = explode(";", $user);
    return $arr[0];
}

function getPwd($user) {
    $arr = explode(";", $user);
    return $arr[1];
}

function findUser($username) {
    $datafile = 'data.csv';
    $users = file($datafile, FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES);
    for ($i=0; $i<count($users); $i++) {
        if ($username == getUsername($users[$i])) {
            return $users[$i];
        }
    }
    return null;
}

function checkUser() {
    $post = $_POST;
    $datafile = 'data.csv';
    if ($post == null) { return false; }
    $user = findUser($post['login']);
    if ($user !== null) {
        if (password_verify($post['pwd'], getPwd($user))) {
            $_SESSION['login'] = $post['login'];
            header('location: hid_page.php');
            exit;
            // return true;
        }
             else {
            echo "Wrong password";
            //return false;
        }
        } else {
            echo "User doesn't exist";
            //return false;
    }
}

checkUser();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Вход</title>
    <link rel="stylesheet" href="css/css1.css">
    <link rel="stylesheet" href="css/grid.css">
</head>
<body>

<form action="task4_auth.php" method="post">
    <fieldset>
        <legend class="sh" align="center"> Вход: </legend>

        <fieldset style="background-color: #b3d4fc">
            <div>
                <input name="login" class="inpData" type="text" minlength="1"
                       maxlength="25" placeholder=" Логин">
            </div>
            <div>
                <input name="pwd" class="inpData" required type="password" placeholder="  Пароль">
            </div>
            <div align="center">
                <label class="sh">
                    <a href="#registrFclose"><input type="submit" class="butNew" value="Вход"></a>
                </label>
            </div>

        </fieldset>
    </fieldset>
</form>

</body>
</html>

