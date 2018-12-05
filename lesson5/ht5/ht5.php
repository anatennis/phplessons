<?php
/*
 * 1. написать функцию,
 * которая будет удалять каталог и все его содержимое
 * 2. Осуществить рекурсивный вызов в подкаталогах
 * 3. Дано: path - путь к каталогу
 * */
/*
if ($handle = opendir($path)) {
    while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != "..") {
            echo "$file\n";
        }
    }
    closedir($handle);
}*/
function delDir($path) { //папка snake создана для удаления
    if (file_exists($path) && is_dir($path)) {
        $ddir = opendir($path);
        while (false !== ($file = readdir($ddir))) {
            if ($file != '.' && $file != '..') {
                $filename = $path.'/'.$file;
                if (is_dir($filename)) {
                     delDir($filename);
                } else { unlink($filename); }
            }
        }
        closedir($ddir);
    }

    if (file_exists($path)) {
        rmdir($path);
    }
}

$path = 'C:\OSPanel\domains\php-lessons\lesson5\ht5\snake';
delDir($path);


//var_dump($post);


function getURL() {
    $txtfile = 'ht5.txt';
    $post = $_POST;
    if ($post['URL'] != null) {
        $links = file($txtfile);
        $link = $post['URL']."\r\n";
        if (in_array($post['URL'], $links)) {
            var_dump('Link already exists');
        } else {
            $fp = fopen($txtfile, 'a'); // w
            fwrite($fp, $post['URL']."\r\n");
            fclose($fp);
            var_dump(file($txtfile));
        }
    }

}

//getURL();

?>

<!--1. создать html форму с одним текстовым полем и кнопкой submit
2. пользователь вводит в форму ссылку (URL адрес)
3. написать обработчик,
который проверяет наличие такой же ссылки в файле,
если не находит, то записывает ее в конец файла -->
<?php if (!isset($post["URL"])) :?>
<form method="post">
    <input type = 'text' name="URL" placeholder="URL">
    <input type="submit" value="Send">
</form>
<?php getURL(); endif;?>
