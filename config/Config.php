<?php
namespace Config;

use Atlas\Pdo\Connection;
class Config 
{
    public function __construct()
    {
        $this->Run();
    }

    public function Run()
    {
        $connection = Connection::new(
            'mysql:host=localhost;dbname=wp_mysite',
            'root', //username
            'root' //password
        );
        return $connection;
    }
}
