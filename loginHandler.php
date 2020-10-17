<?php
    session_start();
    require "Data.php";

    $username = $_POST['username'];
    $password = $_POST['password'];
    $isAuthenticated = false;
    $user = null;

    foreach($users as $i) {
        if($i->getUsername() == $username) {
            if($i->getPassword() == $password) {
                $isAuthenticated = true;
                $user = $i;
            }
        }
    }

    if($isAuthenticated) {
        $_SESSION['user'] = $user;
        $_SESSION['incidents'] = $incidents;
        include "_application.php";
    } else {
        $_SESSION['message'] = 'Login failed, please check for correct username and password';
        include "index.php";
    }