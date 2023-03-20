<?php

function getCheckups(){
    $checkups = [];
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db_name = 'checkups';
    $link = mysqli_connect($host, $user, $pass, $db_name);
    if (!$link) {
        echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
        exit;
    } else {
        $result = $link->query("SELECT * FROM checkups_test");
        while ($row=$result->fetch_array(MYSQLI_ASSOC)){
            array_splice($row, 0, 1);
            $checkupString = implode("," , $row);
            array_push($checkups,  " { $checkupString } ");

        };
        $checkupsString = implode(",",$checkups);
        return "[$checkupsString]";
    };
};