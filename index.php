<?php
include 'shop-header.php';
?>
	<table width='100%' border=0>
	<tr style="background-color:#CCCCCC">
		<td>Product ID</td>
		<td>SKU</td>
		<td>Product Name</td>
		<td>Price</td>
		<td>Quantity</td>
		<td>Action</td>
		
	</tr>
	<?php 
	get_products();
	?>
	</table>	
    <?php
    include 'shop-footer.php'
    ?>