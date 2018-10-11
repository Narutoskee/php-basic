<?php

session_start();

include '../config/db.php';
include '../include/functions.php';
include 'include/db_functions.php';

if ($_SESSION['is_admin']){
    include 'template/layout.php';
}else{
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $user = login($connection, $_POST['email']);
        if ($user){
            if ($user['password'] == md5($_POST['password'])){
                $_SESSION['is_admin'] = 1;
                echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=http://learnphp-tz.tk/admin/">';
            }
        }
    }

    include 'template/views/login.php';
}

