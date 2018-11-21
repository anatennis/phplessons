<?php


echo "Text";

var_dump("var_dump Text"); //отладка

//переменные
$varName = 20;
$secondVar = &$varName; //присваивание по ссылке

var_dump($varName);
var_dump($secondVar);

var_dump($GLOBALS);
var_dump($_SERVER);
var_dump($_REQUEST);
var_dump($_GET);
var_dump($_POST);
var_dump($_SESSION);
var_dump($_COOKIE);

//скалярные типы данных
$boo = true;
$int = 45;
var_dump($int/2);

$int = 45.89;

$str1='Строка в одинарных $int \n кавычках';
$str2="Строка в двойных $int \n кавычках";

var_dump($str1);
var_dump($str2);

$arr = array(1, 3, 6);
$arr = array(
    'key1'=>'val1',
    'key2'=>'val2',
);
//специальные типы данных
unset($arr);

//дескриптор ресурсов


?>

<p><?php echo  "Hello;" ?></p>
<p><?php echo $secondVar ?></p>
