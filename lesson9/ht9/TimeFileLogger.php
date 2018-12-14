<?php
/*TimeFileLogger - записывает сообщение в файл + текущее время*/

class TimeFileLogger extends Logger
{

    public function write()
    {
        $file = 'info.txt';
        $post = $_POST;
        if ($post['info'] != null) {
            $datetoday = date("m.d.y, H:i:s");
            $message = $post['info']." ".$datetoday."\r\n";
            $fp = fopen($file, 'a'); // w
            fwrite($fp, $message);
            fclose($fp);
        } else {
            return false;
        }
    }
}