<?php

function newsAnons($text=""){
    $prev = mb_substr($text, 0, 200);
    $anons = mb_substr($prev, 0, mb_strrpos($prev, ' '));
    $anons = rtrim($anons, "!,.-");
    return $anons;
}

function getPage($connection, $id){
    $sql = "SELECT * from pages where id = $id";
    $res = mysqli_query($connection, $sql);
    //var_dump($sql);
    return $page = mysqli_fetch_assoc($res);
}


function getList($connection, $limit = 10, $pageNum = 1){
    $pageNum = $limit*(--$pageNum);
    $sql = "SELECT * from pages LIMIT $pageNum, $limit";
    $res = mysqli_query($connection, $sql);
    return $pages = mysqli_fetch_all($res, MYSQLI_ASSOC);
}


function getCatList($connection){
    $sql = "SELECT * from category";
    $res = mysqli_query($connection, $sql);
    return $pages = mysqli_fetch_all($res, MYSQLI_ASSOC);
}

function getCountPages ($connection){
    $sql = "SELECT count(*) from pages";
    $res = mysqli_query($connection, $sql);
    return $pages = mysqli_fetch_row($res)[0];
}

function login($connection, $email){
    $sql = "SELECT * from users WHERE email = '".$email."'";
    $res = mysqli_query($connection, $sql);
    return $pages = mysqli_fetch_assoc($res);
}

function user($connection){
    $sql = "SELECT * from users";
    $res = mysqli_query($connection, $sql);
    return $pages = mysqli_fetch_assoc($res);
}