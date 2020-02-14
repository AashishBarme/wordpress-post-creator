<?php

function dbConfig(){
    $servername = "localhost";
    $dbname = "wp_mysite";
    $dbuser = "admin";
    $dbpassword = "65403";

    $connection = mysqli_connect($servername,$dbuser,$dbpassword,$dbname);
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $connection;
}
