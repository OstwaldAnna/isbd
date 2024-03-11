<?php

$connect = mysqli_connect('127.0.0.1', 'root', '', 'my');

if (!$connect){
    die|('Нет подключения к БД');
}

?>