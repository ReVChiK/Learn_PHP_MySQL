<?php

    define("DATABASE_HOST", 'localhost');
    define("DATABASE_USER", 'root');
    define("DATABASE_PASSWORD", 'mysqlroot');
    define("DATABASE_NAME", 'User');

    $link = mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD);
    
    $selected_bd = mysqli_select_db($link, DATABASE_NAME);

?>