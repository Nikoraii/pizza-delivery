<?php

$data = $_POST;

$name = $data['name'];
$email = $data['email'];
$phone_numb = $data['phone'];
$password = $data['password'];
$address = $data['address'];

$password = hash('sha512', $password);

require_once __DIR__ . '/../models/User.php';
try {
    User::register($name, $email, $phone_numb, $password, $address);
    echo 'Success';
} catch (Exception $e) {
    echo 'Error: ' . $e;
}
