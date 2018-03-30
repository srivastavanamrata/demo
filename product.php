<?php
class Product{
 
    // database connection and table name
    private $conn;
    private $table_name = "table1";
 
    // object properties
    public $id;
    public $dashboardJson;
    
 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    // read products
  function read(){
   
      // select all query
      $query = "SELECT
                  p.dashboardJson
              FROM
                  " . $this->table_name . " p
              WHERE id= 1
              ORDER BY
                  p.id DESC";
   
      // prepare query statement
      $stmt = $this->conn->prepare($query);
   
      // execute query
      $stmt->execute();
   
      return $stmt;
  }

  // create product
  function create(){
   
      // query to insert record
      $query = "INSERT INTO
                  " . $this->table_name . "
              SET
                  dashboardJson=:dashboardJson";
   
      // prepare query
      $stmt = $this->conn->prepare($query);
   
      // sanitize
      $this->dashboardJson=htmlspecialchars(strip_tags($this->dashboardJson));
         
      // bind values
      $stmt->bindParam(":dashboardJson", $this->dashboardJson);
         
      // execute query
      if($stmt->execute()){
          return true;
      }
   
      return false;
       
  }

  // update the product
function update(){
 
    // update query
    $query = "UPDATE
                " . $this->table_name . "
            SET
                dashboardJson = :dashboardJson
            WHERE
                id = 1";
 
    // prepare query statement
    $stmt = $this->conn->prepare($query);
 
    // sanitize
    $this->dashboardJson=$this->dashboardJson;
 
    // bind new values
    $stmt->bindParam(':dashboardJson', $this->dashboardJson);
 
    // execute the query
    if($stmt->execute()){
        return true;
    }
 
    return false;
  } 
}