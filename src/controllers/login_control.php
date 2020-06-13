<?php

loadModel('Login');
session_start();
$exception = null ;

if(count($_POST) > 0){
    $login = new Login($_POST);
    try {
        $user = $login->checkLogin();
        $_SESSION['user'] = $user;
        header("Location: main_screen.php");
    } catch (AppException $e) {
       $exception = $e;
    }
}

loadView('login', $_POST + ['exception' => $exception]);