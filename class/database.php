<?php


class Database{
    //parametri za konektiranje na baza
    private $database_server="localhost";

    private $database_username="root";

    private $database_password="3";

    private $database_name= "onlinebookstore";
    private $connection="";


    public function __construct()
    {

//konstruktor
        $this->connection = new mysqli($this->database_server,$this->database_username,$this->database_password,$this->database_name);
    }

    public function deleteINT($table_name,$pk,$pk_value){
       
        //DELETE FROM administrators where admin_id=3
        $sql="DELETE FROM  ".$table_name." WHERE ".$pk." = ".$pk_value;
        $this->exeQuery($sql);

    }

    public function deleteSTR($table_name,$pk,$pk_value){
        //DELETE FROM administrators where admin_id=3
        $sql="DELETE FROM  ".$table_name." WHERE ".$pk." LIKE \"".$pk_value."\"";
      $this->exeQuery($sql);//call function

    }
    
    
    
    public function exeQuery($sql){
        $con=$this->connection;

        $con->query($sql);//execute sql
    }
    

    public function editINT($table_name,$column_value,$pk,$pk_value){

       $sql="UPDATE ".$table_name." SET ".$column_value." WHERE ".$pk." = ".$pk_value;
        $this->exeQuery($sql);
        
        
    }
    
    
    
    
    




}
?>
