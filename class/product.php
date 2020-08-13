<?php
class Product{

    // Connection instance
    private $connection;

    // table name
    private $table_name = "Product";

    // table columns
    public $id;
    public $sku;
    public $barcode;
    public $name;
    public $price;
    public $unit;
    public $quantity;
    public $minquantity;
    public $createdAt; 
    public $updatedAt;
 

    public function __construct($connection){
        $this->connection = $connection;
    }

    //C
    public function add(){
    }
    //R
    public function get(){
        $query = "SELECT  * FROM " . $this->table_name . " ORDER BY id DESC";

        $stmt = $this->connection->prepare($query);

        $stmt->execute();

        return $stmt;
    }
    //U
    public function put(){}
    //D
    public function delete(){}
}