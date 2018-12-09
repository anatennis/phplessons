<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Вход</title>
</head>
<body>

<form action="account.php" method="post">
    <fieldset>
        <legend align="center"> Вход: </legend>

        <fieldset style="background-color: #b3d4fc">
            <div>
                <input name="login" type="text" minlength="1"
                       maxlength="25" placeholder=" Логин">
            </div>
            <div>
                <input name="pwd"  required type="password" placeholder="  Пароль">
            </div>
            <div align="center">
                <label>
                    <a href="#registrFclose"><input type="submit" class="butNew" value="Вход"></a>
                </label>
            </div>

        </fieldset>
    </fieldset>
</form>

<script src="js/sendAuth.js"></script>
</body>
</html>

