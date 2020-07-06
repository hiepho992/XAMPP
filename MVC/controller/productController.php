<?php
include_once "../model/DBconnection.php";
include_once "../model/productDB.php";
include_once "../model/product.php";
class ProductController {

   public function home(){
       $productDB = new ProductDB(DBconnection::make());
       $products = $productDB->selectAll();
         return $products;    

   }
  

}

$productController = new ProductController();
$products = $productController->home();
// var_dump($products);

?>