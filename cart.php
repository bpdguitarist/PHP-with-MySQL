<?php

if( isset( $_GET['action'] ) && 'addtocart' === $_GET['action'] ){//Is action set and equal to addtocart
    include 'class-shoppingcart.php';
    $cart = new ShoppingCart();
    $cart->add_to_cart();
}



?>
<!--<a href="cart.php?product_id=6&action=addtocart">BUY PRODUCT</a>-->
<?php if( isset( $cart ) && !empty( $cart->cart ) ){ ?>
    You currently have <?php echo count($cart->cart); ?> items in your shopping cart.
    You have <?php echo $cart->current_product_cart_count( $_GET['pid'] ); ?> of this item already in your cart. 
<?php } ?>
 

