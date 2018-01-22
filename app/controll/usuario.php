<?php

session_start();

$id = $_SESSION['user_id'];
include_once '../autoLoad/AutoLoad.php';

$userdao = new UsuarioDAO();
$user = new Usuario();
$d = filter_input_array(INPUT_POST);

if (isset($d['enviar'])) {
    if (empty($id) || empty($d['cpf'])|| empty($d['nascimento']) || empty($d['nome'])|| empty($d['senha']) || empty($d['telefone1'])) {
        $_SESSION['msg'] = 'Preencha os Campos Obrigatórios!';
        header("Location: ../../cliente/perfil.php");
    } else {
        $user->setCpf($d['cpf']);
        $user->setDataNascimento($d['nascimento']);
        $user->setEmail($d['email']);
        $user->setNome($d['nome']);
        $user->setSenha($d['senha']);
        $user->setTelefone1($d['telefone1']);
        $user->setTelefone2($d['telefone2']);
        $user->setTelefone3($d['telefone3']);
        $user->setId($id);

        $userdao->Editar($user);
        echo var_dump($user);
        $_SESSION['msg'] = 'Dados Atualizados com Sucesso!';
        $_SESSION['user_nome'] = $d['nome'];
        $_SESSION['user_email'] = $d['email'];
        
        header("Location: ../../cliente/perfil.php");
    }
}

