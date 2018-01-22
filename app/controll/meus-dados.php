<?php

include_once '../autoLoad/AutoLoad.php';
session_start();
$id = $_SESSION['emp_id'];

$d = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

$emp = new Empresa();
$empda = new EmpresaDAO();

if (isset($_POST['dados'])) {

    if (empty($id) || empty($d['nome']) || empty($d['telefone1']) || empty($d['email'])) {
        header("Location: ../../painel/meus-dados?erro=100");
    } else {

        $emp->setNome(ucfirst($d['nome']));
        $emp->setCnpj($d['cnpj']);
        $emp->setEmail($d['email']);
        $emp->setAnos($d['ano']);
        $emp->setMissao(ucfirst(nl2br(strip_tags($d['missao']))));
        $emp->setSobre(ucfirst(nl2br(strip_tags($d['sobre']))));
        $emp->setTelefone1($d['telefone1']);
        $emp->setTelefone2($d['telefone2']);

        $emp->setId($id);

//        mkdir('../../logos/');

        $diretorio = '../../logos/';
        $dt = md5(date("Y-m-d i:m:s"));
        $limp = $empda->BuscarImagem($id);

        $arquivo = isset($_FILES['imagem']) ? $_FILES['imagem'] : FALSE;
        $salvar = '/logos/' . $dt . $arquivo['name'];
        $destino = $diretorio . $dt . $arquivo['name'];
        if (move_uploaded_file($arquivo['tmp_name'], $destino)) {
            $logo = $emp->setLogo($salvar);
            $emp->setLogo($salvar);
        } else {
            
            $emp->setLogo($limp->getLogo());
        }
       

        if ($_FILES['imagem']['size'] == 0) {
            $empda->EditarSemLogo($emp);
            echo 'e vazio';
            header("Location: ../../painel/meus-dados?msg=200");
        } if ($_FILES['imagem']['size'] > 0) {
            echo 'nao e vazio';
            unlink('../..' . $limp->getLogo());
            $empda->Editar($emp);
            header("Location: ../../painel/meus-dados?msg=200");
        }

        var_dump($emp);
    }
}
if (isset($_POST['endereco'])) {

    $end = new EnderecoEmpresa();
    $enddao = new EnderecoEmpresaDAO();
    
    
    if (empty($id) || empty($d['cep']) || empty($d['cidade']) || empty($d['estado']) 
            || empty($d['bairro']) || empty($d['rua']) || empty($d['numero'])) {
        header("Location: ../../painel/meus-dados?msg=210");
    } else {
        
        $valida = $enddao->BuscarDados($id);
        
        if (empty($valida->getId())) {
            $end->setCep($d['cep']);
            $end->setBairro($d['bairro']);
            $end->setCidade($d['cidade']);
            $end->setComplemento($d['complemento']);
            $end->setEmpresa_id($id);
            $end->setEstado($d['estado']);
            $end->setNumero($d['numero']);
            $end->setRua($d['rua']);
            
            $enddao->Inserir($end);
            
            var_dump($end);
            
            header("Location: ../../painel/meus-dados?msg=200");
        } else {
            
            $end->setCep($d['cep']);
            $end->setBairro($d['bairro']);
            $end->setCidade($d['cidade']);
            $end->setComplemento($d['complemento']);
            $end->setEmpresa_id($id);
            $end->setEstado($d['estado']);
            $end->setNumero($d['numero']);
            $end->setRua($d['rua']);
            
             $enddao->Editar($end);
            
            var_dump($end);
            header("Location: ../../painel/meus-dados?msg=200");
        }
        
//    var_dump($d);
    }
    
    
}

