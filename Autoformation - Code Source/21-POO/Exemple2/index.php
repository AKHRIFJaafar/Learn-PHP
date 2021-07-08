<?php
include "Product.php";
$product = new Product();
$product->setName("Produit1"); 

?>

<h1> <?php  echo $product->getName() ?> </h1>