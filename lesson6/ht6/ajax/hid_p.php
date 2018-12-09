<?php
session_start();

function logout() {
    session_destroy();
    unset($_SESSION['login']);
    header('location: auth.php');
    exit;
}

$get = $_GET;
$out = $get['out'];

if ($out) {
    logout();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ЛК</title>

</head>
<body>
<h2><a href="hid_p.php?out=true">Exit</a> </h2>
<h2>Hidden page</h2>

</body>
</html>
