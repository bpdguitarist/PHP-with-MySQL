<?php

if (isset($_COOKIE['logged_in'])){?>
	<tr>
		<td><?php echo $row['product_id']; ?></td>
		<td><?php echo $row['sku']; ?></td>
		<td><?php echo $row['product_name']; ?></td>
		<td><?php echo $row['price']; ?></td>
		<td><?php echo $row['quantity']; ?></td>
		<td><a href="admin.php">Add Product</a>&nbsp;<a href="admin.php?product_id=<?php echo $row['product_id']; ?>">Edit Product</a>&nbsp;<a href="/shop/single-product.php?pid=<?php echo $row['product_id']; ?>">View Product</a></td>
	</tr>
	<?php } else { ?>
<tr>
		<td><?php echo $row['product_id']; ?></td>
		<td><?php echo $row['sku']; ?></td>
		<td><?php echo $row['product_name']; ?></td>
		<td><?php echo $row['price']; ?></td>
		<td><?php echo $row['quantity']; ?></td>
		<td><a href="/shop/single-product.php?pid=<?php echo $row['product_id']; ?>">View</a></td>
	</tr>
<?php } ?>