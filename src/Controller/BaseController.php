<?php
namespace App\Controller;
class BaseController
{
    public function View($filename)
    {
        $file = './views/'.$filename.'.html';
        return readfile($file);
       
    }
}