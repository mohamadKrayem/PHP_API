<?php

  include 'product.php';

  class Book implements prodects
  {

    protected $conn;
    public $sku;
    public $name;
    public $price;
    public const $type = "Book";
    public $weight;

    function __construct($db)
    {
      $this->conn = $db;
    }

    public getArgs(){
      return array("type", "price", "name", "sku", "weight");
    }

    public read(){
      $query = "SELECT * from products";
      $stmt = $this->conn->prepare($query);
      $stmt->execute();
      return $stmt;
    }
  }

 ?>
