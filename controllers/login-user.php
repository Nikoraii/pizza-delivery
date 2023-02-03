<?php

if (!isset($_POST['email'])) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    die();
}

$email = $_POST['email'];
$password = $_POST['password'];
$password = hash('sha512', $password);
require_once __DIR__ . '/../models/User.php';
$user = User::login($email, $password);

if ($user !== null) {
    session_start();
    $_SESSION['user_id'] = $user->id;
    header('Location: ../index.php');
} else {
    header('Location: ../login.php?error=login');
}
