<?php

namespace App\Controller;

class HomeController
{
    public function __construct()
    {
        $this->Execute();
    }   

    public function Execute()
    {
        echo "Hello World";
    }
}