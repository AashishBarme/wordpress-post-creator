<?php
namespace Config;
class Config 
{
    public function __construct()
    {
        $this->Run();
    }

    public function Run()
    {
        $dsn = 'mysql:host=localhost;dbname=wp_mysite';
        $user = "root";
        $passwd = "root";

        $pdo = new \PDO($dsn, $user, $passwd);
        return $pdo;
    }
}
