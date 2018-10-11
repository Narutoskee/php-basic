<?php

include_once __DIR__."/config/db.php";
include_once __DIR__."/include/functions.php";

$pagetype = (explode('/', $_SERVER['REQUEST_URI']))[1];

if($_SERVER['REQUEST_URI']=='/' || !empty($_GET['pagination'])){
    $pagetype = 'main';
}



include __DIR__."/template/layout.php";


//$sql = "SELECT * from pages";
//
//$res = mysqli_query($connection, $sql);
//$pages = mysqli_fetch_all($res, MYSQLI_ASSOC);
//




