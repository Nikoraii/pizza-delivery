<?php

session_start();
if(!isset($_SESSION['user_id'])) {
    header('Location: ../cart.php');
    die();
}
$user_id = $_SESSION['user_id'];
$full_price = $_POST['full_price'];

require_once __DIR__ . '/../models/User.php';

User::payCart($user_id, $full_price);
unset($_SESSION['cart']);
echo json_encode(array('success' => true));
exit;