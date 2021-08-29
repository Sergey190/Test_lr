<?php

    $connect = mysqli_connect('localhost', 'Gar', '123456', 'zz');

    if (!$connect) {
        die('Error connect to DataBase');
    }