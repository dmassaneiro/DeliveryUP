<?php

include_once '../autoLoad/AutoLoad.php';

$empdao = new EmpresaDAO();
$emp = new Empresa();

$d = filter_input_array(INPUT_POST);

if (isset($d['enviar'])) {

    if (empty($d['nome']) || empty($d['email']) || empty($d['senha']) || empty($d['telefone1']) || empty($d['anos'])) {
        $_SESSION['msg'] = 'Preencha os Campos Obrigatórios!';
        header("Location: ../../site/empresa.php");
    } else {
        $emp->setAnos($d['anos']);
        $emp->setCnpj($d['cnpj']);
        $emp->setEmail($d['email']);
//    $emp->setId($d['id']);
//    $emp->setLogo($d['logo']);
//    $emp->setMissao($d['missao']);
        $emp->setNome($d['nome']);
        $emp->setSenha($d['senha']);
        $emp->setSit("A");
//    $emp->setSobre($d['sobre']);
        $emp->setTelefone1($d['telefone1']);
//    $emp->setTelefone2($d['telefone2']);

        $empdao->Inserir($emp);

        $_SESSION['msg'] = 'Cadastro realizado com Sucesso!';
        header("Location: ../../site/empresa-login.php");
    }
}