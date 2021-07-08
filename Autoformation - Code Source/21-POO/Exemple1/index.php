<?php
include "Product.php";
$product = new Product();
$product->Name = "Produit 1"; 

?>

<h1> <?php echo $product->Name ?> </h1>