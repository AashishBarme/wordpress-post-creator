<?php
require __DIR__."../../Config/DbConfiguration.php";
class Functions
{

    private $_db;
    private $_dbConfig;
    public function __construct()
    {
        $this->_dbConfig = new DbConfiguration();
        $this->_db = $this->_dbConfig->Run();
    }

   function addData($post_title,$post_content,$post_status)
   {
      $query = "INSERT into wp_posts 
      (
          post_title,
          post_content,
          post_status,
          post_type,
          post_excerpt,
          to_ping,
          pinged,
          post_content_filtered
      ) values (
          '$post_title',
          '$post_content',
          '$post_status',
          'post',
          'default post excerpt',
          '',
          '',
          '')";
      $run = mysqli_query($this->_db,$query);
      if ($run){
          echo "Post Insert";
      } else {
        echo("Error description: " . $this->_db-> error);
      }
   }
}

