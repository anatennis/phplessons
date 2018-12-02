<?php
//взаимодействие с пользователем

//http message
/*1. строка запроса(Request line)
    - метод передачи данных
    - URL адрес, к которому нужно обратиться
    - версия http протокола
2. заголовки
    описывают тело сообщения,
    несут инф-ю о клиенте (браузере),
    запрошенной странице и тд
3. тело сообщения
*/

$server = $_SERVER;
var_dump($server);
$link = 'http://' . $server['HTTP_HOST'] . $server ['REQUEST_URI'];
var_dump($link);

$parse = parse_url($link);
var_dump($parse);

//функция кодировки
urlencode($url_str);
rawurldecode($url_str);

$link = 'https://www.google.ru/search?newwindow=1&source=hp&ei=DHD9W-XDEoPmrgTQi5LgBQ&q=%D0%B7%D0%B0%D0%BF%D1%80%D0%BE%D1%81&btnK=%D0%9F%D0%BE%D0%B8%D1%81%D0%BA+%D0%B2+Google&oq=%D0%B7%D0%B0%D0%BF%D1%80%D0%BE%D1%81&gs_l=psy-ab.3..0l2j0i131j0l7.3339.4138..4387...0.0..0.88.455.7......0....1..gws-wiz.....0..35i39j0i3.74g9Umr9A5g';
var_dump(urlencode($link));
rawurldecode($link);

//формирование запроса
$data = [
    'param1' => 'value 1',
    'param2' => 'value 2',
    'param3' => 'value 3',
];

$url = 'http://some.com' . http_build_query($data);
var_dump($url);

//GET запрос
$get = $_GET;
var_dump($get);


//отправка данных в строке запроса
//строка запроса ?param1=value1&param2=value2
?>

<form method="post" action="lesson4.php">
    <input name="data" type="text">
</form>

<?php

$post = $_POST;
var_dump($post);
$data = $post['data'];
var_dump($data);
var_dump(trim($data));

//валидация данных на стороне сервера
trim($str); //удаляет пробелы или др символы из строки

empty($str); //проверка на пустоту

//strip_tags();удаляет теги php html из строки
//htmlspecialchars();
//htmlspecialchars_decode();

//для работы с БД
addcslashes($str);

filter_var();
filter_var_array();



?>

<li>
    <a href="http://php-lessons/lesson4/lesson4.php?param1=value1">
        Lesson 4
    </a>
</li>

<nav>
    <ul>
        <li><a href="index.php?id=4">1</a></li>
        <li><a href="about.php">2</a></li>
        <li><a href="cont.php">3</a></li>
    </ul>
</nav>