<?php
session_start();
function getUsername($user) {
    $arr = explode(";", $user);
    return $arr[0];
}

function getPwd($user) {
    $arr = explode(";", $user);
    return $arr[1];
}

function findUser($username) {
    $datafile = 'data.csv';
    $users = file($datafile, FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES);
    for ($i=0; $i<count($users); $i++) {
        if ($username == getUsername($users[$i])) {
            return $users[$i];
        }
    }
    return null;
}

function checkUser() {
    $post = $_POST;
    $datafile = 'data.csv';
    if ($post == null) { return false; }
    $user = findUser($post['login']);
    if ($user !== null) {
        if (password_verify($post['pwd'], getPwd($user))) {
            $_SESSION['login'] = $post['login'];
            return "Auth_ok";
            //header('location: hid_p.php');
            //exit;
        }
        else {
            return "Wrong password";
        }
    } else {
        return "User doesn't exist";
    }
}

echo (checkUser());

?>


