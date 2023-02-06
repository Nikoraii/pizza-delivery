<?php

session_start();

$product_id = $_POST['product_id'];
$product_type = $_POST['product_type'];
$quantity = $_POST['quantity'];
$size = $_POST['size'];

add_to_cart($product_type, $product_id, $quantity, $size);

echo json_encode(array('success' => true));
exit;

// function add_to_cart($product_type, $product_id, $quantity, $size) {
//   $product = $product_type . '-' . $product_id;
//   if (isset($_SESSION['cart'][$product])) {
//     if ($size !== 0) {
//       $_SESSION['cart'][$product][$size] += $quantity;
//     } else {
//       $_SESSION['cart'][$product] += $quantity;
//     }
//   } else {
//     if ($size !== 0) {
//       $_SESSION['cart'][$product][$size] = $quantity;
//     } else {
//       $_SESSION['cart'][$product] = $quantity;
//     }
//   }
// }

function add_to_cart($product_type, $product_id, $quantity, $size) {
  if ($size == 0) {
    $product = $product_type . '-' . $product_id;
  } else {
    $product = $product_type . '-' . $size . '-' . $product_id;
  }
  if (isset($_SESSION['cart'][$product])) {
    $_SESSION['cart'][$product] += $quantity;
  } else {
    $_SESSION['cart'][$product] = $quantity;
  }
}
