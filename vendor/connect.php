<?php

    $connect = mysqli_connect('localhost', 'root', 'mysql', 'reg_users');

    if (!$connect) {
        die('Error connect to DataBase');
    }