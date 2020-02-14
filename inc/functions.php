<?php
   include './config/database.php';

   function dbQuery($post_title,$post_content,$post_status,$post_date)
   {
      $query = "INSERT into wp_posts (post_title,post_content,post_status,post_type,post_date) values ('$post_title','$post_content','$post_status','post','$post_date')";
      $dbconfig = dbConfig();
      $run = mysqli_query($dbconfig,$query);
      if ($run){
          echo "Post Insert";
      } else {
          echo "error";
      }
   }



