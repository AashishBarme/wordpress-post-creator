<?php
include 'config/database.php';

$xml = simplexml_load_file('xml/td_posts.xml');
$table = $xml->table;

$post_date = date("Y-m-d h:i:sa");
for ($i = 0 ; $i < count($table); $i++ )
{
    $column = $table[$i]->column;
    for($j = 0; $j < count($column); $j++){
        if ($column[$j]['name'] == 'post_title'):
          $post_title = $column[$j];
        endif;
        if ($column[$j]['name'] == 'post_content'):
            $post_content =  $column[$j];
        endif;
        if ($column[$j]['name'] == 'post_status'):
            $post_status =  $column[$j];
        endif;
    }
    
    $query = "INSERT into wp_posts (post_title,post_content,post_status,post_type,post_date) values ('$post_title','$post_content','$post_status','post','$post_date')";
    $run = mysqli_query($connection,$query);
    if ($run){
        echo "Post Insert";
    } else {
        echo "error";
    }
}
