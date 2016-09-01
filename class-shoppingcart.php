<?php

class ShoppingCart{
    
    private $user_id;
    /**
     * Array 
     */ 
    public $cart;
    /**
     * String
     */ 
    public $cart_cookie;
    
    public function __construct(){
        $this->get_active_cart();
    }
    
    public function get_active_cart(){
        if( isset( $_COOKIE['cart'] ) ){ //is there a current cart
            $this->cart = $_COOKIE['cart']; //set new variable equal to cookie
            $this->cart = explode( ', ', $this->cart ); //make cart variable an array
        }else{
            $this->cart = array(); //make empty cart array if there isn't already one avaiable.
        }
    }
    
    public function add_to_cart(){
        if( isset( $_GET['pid'] ) ){ //is pid set
            $this->cart[] = $_GET['pid']; //add new pid to cart array
            $this->cart_cookie = implode( ', ', $this->cart ); //implode cart array into comma separated string
            setcookie( 'cart', $this->cart_cookie, strtotime(' +30 days') ); //set cart cookie again with new value
        }
    }
    /**
     * Return the quantity of the current item the user is viewing already in their cart.
     * 
     * @params $product_id int
     * @return int
     */
    public function current_product_cart_count( $product_id ){
        $value_count = array_count_values( $this->cart );
        return $value_count[$product_id];
    }
    

}