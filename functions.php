<?php
//gets the list of all products for index.html
function get_products(){
    $sql = new sqlConnector();
    $sql->runQuery( 'SELECT * FROM store_products' );
  
  while( $row = $sql->result->fetch_assoc()){
      include 'rows.php';
  }
}
//gets the data for a single product for single-product.html
function get_single_product( $product_id ){
    $sql = new sqlConnector();
    $sql->runQuery( 'SELECT * FROM store_products WHERE product_id =' . $product_id );
    while ( $row = $sql->result->fetch_assoc()){
        return $row;
    }
    
}
//gets the data for a single product for admin.html
function fetch_product_info( $product_id ){
    $sql = new SqlConnector();
    $sql->runQuery( 'SELECT * FROM store_products WHERE product_id =' . $product_id );
    while( $row = $sql->result->fetch_assoc() ){
         return $row; 
        };
}
//adds a new user to the database in the store_users table from register-user.php
function register_user( $username, $first_name, $last_name, $password ) {
    $username = filter_var( $username, FILTER_SANITIZE_STRING);
    $first_name = filter_var( $first_name, FILTER_SANITIZE_STRING);
    $last_name = filter_var( $last_name, FILTER_SANITIZE_STRING);
    $password = filter_var( $password, FILTER_SANITIZE_STRING);
    $sql = new SqlConnector();
    $sql->runQuery( "insert into store_users (username, first_name, last_name, password) value('$username', '$first_name', '$last_name', '$password')" );
}
//adds new product to the database in the store_products table
function register_product ( $product_name, $sku, $price, $quantity ) {
    $product_name = filter_var( $product_name, FILTER_SANITIZE_STRING);
    $sku = filter_var( $sku, FILTER_SANITIZE_STRING);
    $price = filter_var( $price, FILTER_SANITIZE_STRING);
    $quantity = filter_var( $quantity, FILTER_SANITIZE_STRING);
    $sql = new SqlConnector();
    $sql->runQuery( "insert into store_products (product_name, sku, price, quantity) value('$product_name', '$sku', '$price', '$quantity')" );
}
//updates a product in the products table
function update_product () {
    $sql = new SqlConnector();
    $sql->runQuery( 'UPDATE store_products SET product_name="' . strip_tags( $_GET['productname'] ) . '", sku="' . strip_tags( $_GET['sku'] ) . '", price="' . strip_tags( $_GET['price'] ) . '", quantity="' . strip_tags( $_GET['quantity'] ) . '"' );
}
//sets login cookie
function login(){
    if( isset( $_POST['username']) && isset( $_POST['password'])){
        $sql = new SqlConnector();
        $sql->runQuery( 'SELECT user_id FROM store_users WHERE username="' . strip_tags( $_POST['username'] ) . '" AND password="' . strip_tags( $_POST['password'] ) . '"' );
    
        if( $sql->result->num_rows > 0 ){
            setcookie( 'logged_in', true );
            header( "Location: index.php" );
            exit;
        } else {
            echo "The credentials you entered are incorrect. Please try again.";
        }
    
    }
}
?>