<?php
session_start();
require_once 'connect.php';

$name = $_POST['name'];
$surname = $_POST['surname'];
$login = $_POST['login'];
$password = $_POST['password'];
$repeat_password = $_POST['repeat_password'];

if ($password === $repeat_password) { mysqli_query($connect,
    "INSERT INTO `users`(`id`, `name`, `surname`, `login`, `password`) 
    VALUES (NULL,'$name','$surname','$login','$password')");

    $_SESSION['message'] = 'Регистрация прошла успешно';
    header('');
}else{
    $_SESSION['message'] = 'Пароли не совпадают';
    header('../index.php');
}


?>