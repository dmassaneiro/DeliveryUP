<?php

session_start();
$id_user = $_SESSION['user_id'];

include_once '../autoLoad/AutoLoad.php';

$end = new Endereco();
$enddao = new EnderecoDAO();

$d = filter_input_array(INPUT_POST);

if (isset($d['enviar'])) {

    if (empty($id_user) || empty($d['cep']) || empty($d['numero'])|| empty($d['endereco']) || empty($d['bairro']) ) {
        $_SESSION['msg'] = 'Preencha os Campos Obrigatórios!';
        header("Location: ../../cliente/enderecos.php");
    } else {

        $end->setCep($d['cep']);
        $end->setBairro($d['bairro']);
        $end->setCidade($d['cidade']);
        $end->setEstado($d['uf']);
        $end->setComplemento($d['complemento']);
        $end->setRua($d['endereco']);
        $end->setNumero($d['numero']);
        $end->setUsuario_id($id_user);
        
        echo var_dump($end);
        
        $enddao->Inserir($end);
        
        header("Location: ../../cliente/enderecos.php");
    }
}

