<?php

session_start();

// get the product id and quantity
$product_id = $_POST['product_id'];
$product_type = $_POST['product_type'];
$quantity = $_POST['quantity'];

// add the item to the shopping cart
add_to_cart($product_type, $product_id, $quantity);

// return a response indicating success
echo json_encode(array('success' => true));
exit;

function add_to_cart($product_type, $product_id, $quantity) {
  $product = $product_type . '-' . $product_id;
  // check if the item is already in the cart
  if (isset($_SESSION['cart'][$product])) {
    // if it is, increase the quantity
    $_SESSION['cart'][$product] += $quantity;
  } else {
    // if it's not, add it to the cart with the specified quantity
    $_SESSION['cart'][$product] = $quantity;
  }
}

?>
