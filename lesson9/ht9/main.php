<?php
include_once "ILogger.php";
include_once "Logger.php";
include_once "EchoLogger.php";
include_once "TimeFileLogger.php";
include_once "FileLogger.php";


$post = $_POST;
$config = Logger::getInstance($post['log']);
if ($config) {
    $config->write();
}

?>


<form action="main.php" method="post">
            <div>
                <legend> Message: </legend>
                <input name="info" type="text" placeholder="Message">
            </div>

            <div>
                <label>
                    <a><input type="submit" name="log" value="Echo"></a>
                    <a><input type="submit" name="log" value="File"></a>
                    <a><input type="submit" name="log" value="TimeFile"></a>
                </label>
            </div>
</form>
