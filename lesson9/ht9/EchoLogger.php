<?php
/**
EchoLogger - выводит сообщения на экран
 */
require_once "Logger.php";
class EchoLogger extends Logger
{
    public function write()
    {
        $file = 'info.txt';
        $messages = file($file);

        if ($file != null) {
             $count = count($messages);
             for ($i=0; $i<$count; $i++) {
                 echo "<p>$messages[$i]</p>";
             }
        }
    }

}