<?php
namespace App\Controller;
use App\Application\Domain\Post;
use App\Application\Services\PostService;

class OutputController extends BaseController
{
    private $_postService;
    public function __construct($file)
    {
        $this->_postService = new PostService();
        $this->Exceute($file);
    }

    private function Exceute($file)
    {
        return $this->Operation($file);
    }


    private function Operation($file)
    {	
        $key = ['post_author','post_date','post_date_gmt','post_content','post_title','post_excerpt',
                'post_status','comment_status','ping_status','to_ping','pinged','post_type',
                'post_mime_type','post_content_filtered'];
        $xml = simplexml_load_file($file);	
        $table = $xml->table;		
        $result =[];
        $ids = [];
        for ($i = 0 ; $i < count($table); $i++ )	
        {	
            $column = $table[$i]->column;	
            for($j = 0; $j < count($column); $j++){
                foreach($key as $item )
                {	
                    if ($column[$j]['name'] == $item):
                        $temp = ('%^&'.$column[$j]);
                        $result[$item] = str_replace('%^&','',$temp); 	
                    endif;	
                }

            } 

            $entity = new Post();
            $entity->post_author =  intval($result['post_author']);	 
            $entity->post_date =  $result['post_date'];	 
            $entity->post_date_gmt =  $result['post_date_gmt'];	 
            $entity->post_content =  $result['post_content'];	 	 	 	 
            $entity->post_title =  $result['post_title'];	 	 	 	 
            $entity->post_excerpt =  $result['post_excerpt'];	 	 	 	 
            $entity->post_status =  $result['post_status'];	 
            $entity->comment_status =  $result['comment_status'];	 
            $entity->ping_status =  $result['ping_status'];	 	 	 	 	 	 
            $entity->to_ping =  $result['to_ping'];	 	 	 	 
            $entity->pinged =  $result['pinged'];	 	 	 	  
            $entity->post_type =  $result['post_type'];	 
            $entity->post_mime_type =  $result['post_mime_type'];
            $entity->post_content_filtered = $result['post_content_filtered'];
            $ids[] = $this->_postService->Create($entity);
        }
        foreach($ids as $id)
        {
            echo "Id:".$id.'<br>';  
        }
    }	
}	
