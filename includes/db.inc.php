<?php 

    define("DB_HOST","localhost");
    define("DB_USER","root");
    define("DB_PASSWORD","");
    define("DB_NAME","helio");

    $connect = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

    if ($connect->connect_errno) {
        echo "Something goes wrong with the database connection";
        exit();
    }

?>