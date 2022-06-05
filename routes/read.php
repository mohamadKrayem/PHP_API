<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
// include database and object files
include_once '../config/database.php';
include_once '../objects/product.php';
include_once '../objects/Book.php';

$type = isset($_GET['type']) ? $_GET['id'] : "Book";

$database = new Database();
$db = $database->getConnection();
$productClass = ucfirst($type);
$Book = new $productClass($db));
$stmt = $Book->read();
$num = $stmt->rowCount();


if($num>0){

  $products_arr = array();

  while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

    extract($row);
    $lastArg = $Book->getArgs();
    $product_item = array(
      $lastArgs[0] => $type,
      $lastArgs[1] => $price,
      $lastArgs[2] => $name,
      $lastArgs[3] => $sku,
      $lastArgs[4] => echo($lastArgs[4])
    );

    array_push($products_arr, $product_item);
  }

  http_response_code(200);

  echo json_encode($products_arr);

}
 ?>
