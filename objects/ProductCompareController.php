<?php

  include 'product.php';

  class ProductCompareController{

    // private $conn;
    //
    // public function __construct($db){
    //   $this->conn = $db;
    // }

    public function show(Product $product){
      $data = $product->read();
      return $data;
    }
  }

 ?>
