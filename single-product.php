<?php 
include 'shop-header.php';
if( isset( $_GET['pid'] ) ){
    //GET product info
    $product = fetch_product_info( $_GET['pid'] );
    
}
?>
<p>Product Name: <?php echo $product['product_name']; ?></p>
<p>SKU: <?php echo $product['sku']; ?></p>
<p>Price: <?php echo $product['price']; ?></p>
<p>Quantity: <?php echo $product['quantity']; ?></p>


