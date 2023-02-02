<?php

session_start();

$product_id = $_POST['product_id'];
$product_type = $_POST['product_type'];
$quantity = $_POST['quantity'];

add_to_cart($product_type, $product_id, $quantity);

echo json_encode(array('success' => true));
exit;

function add_to_cart($product_type, $product_id, $quantity) {
  $product = $product_type . '-' . $product_id;
  if (isset($_SESSION['cart'][$product])) {
    $_SESSION['cart'][$product] += $quantity;
  } else {
    $_SESSION['cart'][$product] = $quantity;
  }
}

?>
