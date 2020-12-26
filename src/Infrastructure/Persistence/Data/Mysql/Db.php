<?php
namespace App\Infrastructure\Persistence\Data\Mysql;
use Config\Config;
class Db
{
    private $_adapter;
    public function __construct()
    {
        $this->_adapter = (new Config)->Run(); 
    }

    public function ExecuteCommand($sql,$params=null)
    {
        $stmt = $this->_adapter->prepare($sql);
        return $stmt->execute($params);
        
    }
    public function Insert(string $table,array $data)
    {
        $columns =$this->GetColumnString($data);
        $values = $this->GetInsertValueString($data);
        $sql =sprintf("INSERT INTO %s (%s) VALUES (%s)",$table,$columns,$values); 
        $this->ExecuteCommand($sql,$data);
        
        return $this->_adapter->lastInsertId();
    }   
    
    private  function GetSqlString(array $data,$separator=",")
    {
        return implode($separator,$data);
    }
    private function PrepareKeyValue(array $data)
    {
        $pair = [];

        foreach($data as $key=>$value)
        {
        $pair[] = "`".$key."`="."'".\addslashes($value)."'";
        }
        return $pair;
    }
    private function GetColumnString(array $data)
    {
        $columns = $this->QuoteKeys($data);
        return $this->GetSqlString($columns);
    }
    private function GetInsertValueString(array $data)
    {
        $values = $this->PrepareValues($data);
        return $this->GetSqlString($values);
    }
    public function PrepareValues(array $data)
    {
        $values = array_keys($data);
        return array_map(function($val){
        return ":". $val;
        },$values);

    }

    public function QuoteKeys(array $data) : array
    {
        $columns = array_keys($data);
        return array_map(function($val){
        return "`".$val."`";
        },$columns);	
    }

}