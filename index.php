<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

phpinfo();
die();
include_once __DIR__."/config/db.php";
include_once __DIR__."/include/functions.php";


$pagetype = (explode('/', $_SERVER['REQUEST_URI']))[1];

if($_SERVER['REQUEST_URI']=='/' || !empty($_GET['pagination'])){
    $pagetype = 'main';
}

if ($pagetype=='main'){
    if ($_GET['pagination']){
        $pages = getList($connection, 10,$_GET['pagination']);
    }else{
        $pages = getList($connection);
    }

    $count = getCountPages($connection);
}


if ($pagetype == 'page'){
    $id = explode('/', $_SERVER['REQUEST_URI'])[2];
    $page = getPage($connection, $id);
    if (!$page){
        include '404.php';
        die();
    }
}

include __DIR__."/template/layout.php";