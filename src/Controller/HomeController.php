<?php

namespace App\Controller;

class HomeController extends BaseController
{
    public function __construct()
    {
        $this->Execute();
    }   

    public function Execute()
    {
        return $this->View("home");
    }

}