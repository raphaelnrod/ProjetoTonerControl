<?php

function requireValidSession(){
    $user = $_SESSION['user'];
    if (!isset($user)) {
        header('Location: login_control.php');
        exit();
    }
}