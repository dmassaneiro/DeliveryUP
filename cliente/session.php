<?php

session_start();
$user_id = $_SESSION['user_id'];
$user_nome = $_SESSION['user_nome'];
$user_email = $_SESSION['user_email'];

if (!isset($_SESSION['user_id'])) {
    header("Location: ../site/login-register.php");
    exit;
}
