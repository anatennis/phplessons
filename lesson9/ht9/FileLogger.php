<?php
/*FileLogger - записывает сообщение в файл*/

class FileLogger extends Logger
{
    public function write()
    {
        $file = 'info.txt';
        $post = $_POST;
        if ($post['info'] != null) {
            $message = $post['info']."\r\n";
            $fp = fopen($file, 'a'); // w
            fwrite($fp, $message);
            fclose($fp);
        } else {
            return false;
        }
    }

}