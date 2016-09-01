<?php 
include 'shop-header.php';

if( isset( $_GET['price'])) {
    update_product( $_GET['productname'], $_GET['sku'], $_GET['price'], $_GET['quantity'] );
}

if (isset( $_GET['product_id'] )){
    $product = fetch_product_info( $_GET['product_id'] );
?>  
<form method="post" action="admin.php">
  Product ID: <br>
  <input type="hidden" name="productid" value=" <?php echo $product['product_id']; ?>"><br>
  Product Name: <br>
  <input type="text" name="productname" value="<?php echo $product['product_name']; ?>"><br>
  SKU: <br>
  <input type="text" name="sku" value="<?php echo $product['sku']; ?>" ><br>
  Price: <br>
  <input type="text" name="price" value="<?php echo $product['price']; ?>" ><br>
  Quantity: <br>
  <input type="text" name="quantity" value="<?php echo $product['quantity']; ?>" ><br>
  <input type="submit" value="Submit">
</form>
<?php
} else {
if( isset( $_POST['sku'])) {
    register_product( $_POST['productname'], $_POST['sku'], $_POST['price'], $_POST['quantity'] );
}
?>
<form method="post" action="admin.php">
  Product ID: <br>
  <input type="hidden" name="productid" value=" "><br>
  Product Name: <br>
  <input type="text" name="productname" value=" "><br>
  SKU: <br>
  <input type="text" name="sku" value="" ><br>
  Price: <br>
  <input type="text" name="price" value="" ><br>
  Quantity: <br>
  <input type="text" name="quantity" value="" ><br>
  <input type="submit" value="Submit">
</form>
<?php
}

    include 'shop-footer.php'
?>