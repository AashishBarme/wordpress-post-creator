<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';
$url = (basename($_SERVER['REQUEST_URI']) === "wordpress-post-creator") ? "/" : basename($_SERVER['REQUEST_URI']);  

new Config\Routes($url);

