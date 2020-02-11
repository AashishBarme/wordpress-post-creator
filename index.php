<?php
$xml = simplexml_load_file('xml/td_posts.xml');
$table = $xml->table;

for ($i = 0 ; $i < count($table); $i++ )
{
    $column = $table[$i]->column;
    for($j = 0; $j < count($column); $j++){
        if ($column[$j]['name'] == 'post_title'):
          echo 'Post Title:'. $column[$j].'<br>';
        endif;
        if ($column[$j]['name'] == 'post_date'):
            echo 'Post Date:'. $column[$j].'<br>';
        endif;
        if ($column[$j]['name'] == 'post_content'):
            echo 'Post Content:'. $column[$j].'<br>';
        endif;
        if ($column[$j]['name'] == 'post_status'):
            echo 'Post Status:'. $column[$j].'<br><br>';
        endif;
       
    }
}
