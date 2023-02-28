<?php 

$link =mysqli_connect("localhost","root","","fashion");
$link->query("SET NAMES 'utf8'");


if (mysqli_connect_errno()){
    echo "Ошибка подключение БД('.mysqli_connect_errno().'):".mysqli_connect_error();
    exit;

}






?> 