<?php
session_start();

function logout() {
    session_destroy();
    unset($_SESSION['login']);
    header('location: task4_auth.php');
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
    <link rel="stylesheet" href="css/css1.css">
    <link rel="stylesheet" href="css/grid.css">
</head>
<body>
<h2><a href="hid_page.php?out=true">Exit</a> </h2>
<h2>Hidden page</h2>

</body>
</html>


