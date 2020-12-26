<?php
namespace Config;
use App\Controller\HomeController;

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
                echo "Output";
                break;
            default:
                echo "Nothing Found";
                break;
        }    
    }
} 
