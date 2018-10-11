<?php
$view = $_GET['action'];

if(!isset($_GET['action'])){
    $view = 'main';
}

if (!empty($_POST)) {
    $action = $_GET['action'];
    switch ($action) {
        case "add_page";
            $content = htmlspecialchars($_POST['content']);
            $sql = "INSERT INTO `pages` (`name`, `content`, `active`) VALUES ('{$_POST['name']}', '{$_POST['content']}', '{$_POST['active']}')";
            mysqli_query($connection, $sql);
            break;
        case "edit_page";
            $content = htmlspecialchars($_POST['content']);
            $sql = "UPDATE `pages` SET name = '{$_POST['name']}', content = '{$_POST['content']}', active = '{$_POST['active']}' WHERE id = {$_GET['id']}";
            mysqli_query($connection, $sql);
            break;
    }
}

if(file_exists('template/views/'.$view.'.php')){
    include 'template/views/'.$view.'.php';
} else{
    echo "Error!";
}
