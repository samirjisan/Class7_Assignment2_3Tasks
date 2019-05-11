<?php

class Connection{
    
    public $conn;

    public function __construct() {
       $this->conn = new PDO("mysql:host=localhost;dbname=ctdb","root","") ;
       
       
    }
    
    public function insertMobiles($Name,$Model,$Price){
        
        try{
            
            $statement = $this->conn->prepare("INSERT INTO Mobiles(Name,Model,Price) Values (:Name,:Model,:Price)");
        
        $statement->execute(array(
            ':Name' => $Name,
            ':Model' => $Model,
            ':Price' => $Price
                )
                );
                echo 'Inserted';
            
        } catch (\Exception $e){
            echo "error".$e->getMessage();
            
        }
        
        
        
    }
    
}
?>

