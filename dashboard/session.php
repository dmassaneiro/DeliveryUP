<?php
session_start();
$emp_id = $_SESSION['emp_id'];
$emp_nome = $_SESSION['emp_nome'];
$emp_email = $_SESSION['emp_email'];

if (!isset($_SESSION['emp_id'])) {
    header("Location: ../site/empresa-login.php");
    exit;
}
