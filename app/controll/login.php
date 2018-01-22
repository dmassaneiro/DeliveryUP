<?php

session_cache_expire(240);
$cache_expire = session_cache_expire();
session_start();

include_once '../autoLoad/AutoLoad.php';

$userdao = new UsuarioDAO();

$email = filter_input(INPUT_POST, 'email');
$senha = filter_input(INPUT_POST, 'senha');

$d = $userdao->VerificaLogin($email, $senha);
if ($email && $senha != null) {
    if ($d->getId()) {
        $_SESSION['user_id'] = $d->getId();
        $_SESSION['user_nome'] = $d->getNome();
        $_SESSION['user_email'] = $d->getEmail();


        echo var_dump($_SESSION);

        header("Location: ../../cliente/");
    } else {
        $_SESSION['loginErro'] = 'Email ou Senha Inválidos';

        header("Location: ../../site/login-register.php");
    }
} else {
    $_SESSION['loginErro'] = 'Preencha os Campos Obrigatórios';
    header("Location: ../../site/login-register.php");
}