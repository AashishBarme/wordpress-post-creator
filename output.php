<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once __DIR__.'/src/Inc/Functions.php';

class Output
{
    public function Run($file)
    { 
        $functions = new Functions();
        $xml = simplexml_load_file($file);
        $table = $xml->table;

        // $post_date = date("Y-m-d h:i:sa");
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
            $functions->addData($post_title,$post_content,$post_status);
        }
    }
}

$output =  new Output();
$output->Run($_FILES['xmldata']['tmp_name']);