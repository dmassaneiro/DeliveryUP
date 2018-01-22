<?php

session_cache_expire(240);
$cache_expire = session_cache_expire();
session_start();

include_once '../autoLoad/AutoLoad.php';

$userdao = new EmpresaDAO();

$email = filter_input(INPUT_POST, 'email');
$senha = filter_input(INPUT_POST, 'senha');

$d = $userdao->VerificaLogin($email, $senha);
if ($email && $senha != null) {
    if ($d->getId()) {
        $_SESSION['emp_id'] = $d->getId();
        $_SESSION['emp_nome'] = $d->getNome();
        $_SESSION['emp_email'] = $d->getEmail();


        echo var_dump($_SESSION);

        header("Location: ../../painel/");
    } else {
        $_SESSION['msg'] = 'Email ou Senha Inválidos.';

        header("Location: ../../site/empresa-login?erro=100");
    }
} else {
    $_SESSION['msg'] = 'Preencha os Campos Obrigatórios.';
    header("Location: ../../site/empresa-login.php");
}