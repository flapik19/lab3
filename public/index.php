<?php 
require 'vendor/autoload.php';

session_start();

if (!isset($_SESSION['user_id'])) {
    if (isset($_COOKIE['user_id']) && isset($_COOKIE['bg_color']) && isset($_COOKIE['font_color'])) {
        $_SESSION['user_id'] = $_COOKIE['user_id'];
        $_SESSION['bg_color'] = $_COOKIE['bg_color'];
        $_SESSION['font_color'] = $_COOKIE['font_color'];
    } else {
        header("Location: pages/login.php");
        exit();
    }
}

$bgColor = isset($_SESSION['bg_color']) ? $_SESSION['bg_color'] : '#0040a1';
$fontColor = isset($_SESSION['font_color']) ? $_SESSION['font_color'] : '$000000';
?>

<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="UTF-8">
        <meta name = "viewport" content = "width = device-width , initial-scale = 1.0">
        <title>Лабораторная работа №1</title>
        <style>
            body { 
                background-color: <? htmlspecialchars($bgColor) ?>;
                color: <? htmlspecialchars($fontColor) ?>
            }
        </style>
    </head>

    <body>
        <h1>Главная страница</h1>
        <p>Сюда попадете после авторизация</p>
        <a href = "pages/logout.php"></a>
    </body>
</html>
