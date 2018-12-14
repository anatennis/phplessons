<?php

/*1. Интерфейс ILogger с мотодом write()
2. Реализовать три стратегии:
EchoLogger - выводит сообщения на экран
FileLogger - записывает сообщение в файл
TimeFileLogger - записывает сообщение в файл + текущее время
3. Реализовать классы, исползующие эти стратегии.*/

abstract class Logger implements ILogger
{
    //CONST FILE_CONST = "info.txt";
   // protected $log;

    public static function getInstance($whatlog) {
        $classname = $whatlog.'Logger';
        //var_dump("classname: $classname");

        if (!class_exists($classname) || $classname== "Logger") {
            var_dump("Class doesn't exist");
            return false;
        }

        $log = new $classname();

        if (!is_subclass_of($log, "ILogger")) {
            var_dump("Wrong interface");
            return false;
        }
        return $log;

    }

}