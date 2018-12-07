<?php
//Задание 1
//Реализовать загрузку нескольких файлов на сервер. На сервере проверять размер и тип файла,
// файлы, которые прошли проверку, загружать. Если файл не загружен сообщать пользователю имя
// файла и почему файл не был загружен.
//Пишите функции!
/*
foreach ($_FILES["pictures"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["pictures"]["tmp_name"][$key];
        // basename() может спасти от атак на файловую систему;
        // может понадобиться дополнительная проверка/очистка имени файла
        $name = basename($_FILES["pictures"]["name"][$key]);
        move_uploaded_file($tmp_name, "data/$name");
    }
}*/

function loadImgs() {
    $files = $_FILES;
    $extensions = array('jpg', 'jpeg', 'png', 'gif');
    $max_file_size = 2 * 1048576;  //MB
    $errors = array(
        UPLOAD_ERR_INI_SIZE => 'Размер файла больше разрешенного директивой upload_max_filesize в php.ini',
        UPLOAD_ERR_FORM_SIZE => 'Размер файла превышает указанное значение в MAX_FILE_SIZE',
        UPLOAD_ERR_PARTIAL => 'Файл был загружен только частично',
        UPLOAD_ERR_NO_FILE => 'Не был выбран файл для загрузки',
        UPLOAD_ERR_NO_TMP_DIR => 'Не найдена папка для временных файлов',
        UPLOAD_ERR_CANT_WRITE => 'Ошибка записи файла на диск'

    );
    for ($i = 0; $i < count($files['pic']['name']); $i++) {
        if ($files['pic']['error'][$i] === UPLOAD_ERR_OK) {
            $fileext = pathinfo($files['pic']['name'][$i], PATHINFO_EXTENSION);
            if (in_array(strtolower($fileext), $extensions)) {
                if ($files['pic']['size'][$i] <= $max_file_size) {
                    $fname = $files['pic']['name'][$i];
                    move_uploaded_file($files['pic']['tmp_name'][$i], "data/$fname");
                    echo "Картинка ",$files['pic']['name'][$i], " успешно загружена\r\n";
                } else {
                    echo 'Размер картинки ', $files['pic']['name'][$i], "больше допустимого\r\n";
                }
            } else {
                echo "Недопустимый формат у файла ", $files['pic']['name'][$i],"\r\n";
            }
        } else {
            if (!empty($errors[$files['pic']['error'][$i]])) {
                echo $errors[$files['pic']['error'][$i]], "\r\n";
            } else {
                var_dump("Произошла техническая ошибка при загрузке файла. Попробуйте еще раз.\r\n");
            }
        }
    }
}

loadImgs();

?>

<form enctype="multipart/form-data" action="task1.php" method="post">
    <input type="hidden" name="MAX_FILE_SIZE" value="5097152">
    <input name="pic[]" type="file" accept="image/*"> <br>
    <input name="pic[]" type="file" accept="image/*">
    <input type="submit" value="Send">
</form>

