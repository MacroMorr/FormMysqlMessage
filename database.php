<?php

$server = "localhost";
$login = "root";
$password = "root";
$name_db = "vue";

$link = mysqli_connect($server, $login, $password, $name_db);

if ($link == false) {
    echo "Соединение не удалось";
}