<?php
require __DIR__.'/../vendor/autoload.php';
//echo "Index.php";
/*require_once __DIR__.'/../private/Models/ArticleModel.php';
require_once __DIR__.'/../private/Models/GoodsModel.php';
require_once __DIR__.'/../private/Base/Controller.php';
require_once __DIR__.'/../private/Controllers/IndexController.php';
require_once __DIR__.'/../private/Controllers/ArticleController.php';*/


function run() {
    $controller = "Index";
    $action = "index";
    $get = null;
    $routes = explode('/', $_SERVER['REQUEST_URI']);
    //var_dump($routes);
    if ($routes[1]) {
        $controller = $routes[1];
    }
    if ($routes[2]) {
        $action = $routes[2];
    }
    if ($routes[3]) {
        $get = $routes[3];
    }
    $controller = 'Anastasia\Travelblog\Controllers\\'.ucfirst(strtolower($controller)).'Controller';
   // var_dump("Controller: $controller");

    $action=strtolower($action).'Action';
    //var_dump("Action: $action");

    if (!class_exists($controller)) {
        var_dump("Class wasn't found");
        return false;
    }

    $controller = new $controller();

    if (!method_exists($controller, $action)) {
        var_dump("Method wasn't found");
        return false;
    }

    $controller->$action($get);
}
run();
//общие для всех классы веб-приложений, которые нужно реализовать
//Request
//Response
//Session
//Cookies
//Router
//BD
//Controller

//Личный кабинет
//Комментарии
//Статьи
//Товары
//Сообщение