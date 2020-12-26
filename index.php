 <!-- <html>
 <head>
  <title>XML to WP Post Creator</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 </head>
 <body> 
    <div class="container">
      <div class="row">
            <form action="src\Inc\Output.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="xmlfile">XML File </label>
                <input type="file" name="xmldata" class="form-control-file" id="xmlfile">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>   
        </div>
    </div>         
 </body>
 </html>  -->
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require 'vendor/autoload.php';

$url = (basename($_SERVER['REQUEST_URI']) === "wordpress-post-creator") ? "/" : basename($_SERVER['REQUEST_URI']);  

// use Config\Routes;
$route = new Config\Routes($url);
// require_once "./config/routes.php";
