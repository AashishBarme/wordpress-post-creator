<?php

class DbConfiguration
{
    private $_serverName;
    private $_dbName;
    private $_dbUser;
    private $_dbPass;
    
    public function __construct()
    {
        $this->_serverName = "localhost";
        $this->_dbName = "wp_mysite";
        $this->_dbUser = "root";
        $this->_dbPassword = "root";
    }

    public function Run(){
        $connection = mysqli_connect($this->_serverName, $this->_dbUser, $this->_dbPassword, $this->_dbName);
        if (!$connection) {
            die("Connection failed: " . mysqli_connect_error());
        }
        return $connection;
    }
}
