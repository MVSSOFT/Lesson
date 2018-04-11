<?php
    define("HOST", "localhost");
    define("DBUser", "root");
    define("DBPassword", "");
    define("DBName","less");
    $link = mysqli_connect(HOST, DBUser, DBPassword, DBName);   
    mysqli_set_charset($link,"utf8");
?>