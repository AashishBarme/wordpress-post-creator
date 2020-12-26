<?php
namespace Config;
use App\Controller\HomeController;
use App\Controller\OutputController;

class Routes
{
    public function __construct($url)
    {
        $this->Execute($url);
    }

    private function Execute($url)
    {
        switch ($url) {
            case '/':
                new HomeController();
                break;
            case 'output':
                new OutputController($_FILES['xmldata']['tmp_name']);
                break;
            default:
                echo "Nothing Found";
                break;
        }    
    }
} 
