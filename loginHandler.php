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
        include "_application.php";
    } else {
        include "index.php";
    }