<?php

include_once '../autoLoad/AutoLoad.php';
session_start();
$id = $_SESSION['emp_id'];

$pro = new Produto();
$prodao = new ProdutoDAO();

$img = new ImagemProduto();
$imgdao = new ImagemProdutoDAO();

$d = filter_input_array(INPUT_POST);

$del = filter_input(INPUT_GET, 'del');
$remover = filter_input(INPUT_GET, 'remove');
$id_pro = filter_input(INPUT_GET, 'idpro');

if (isset($d['enviar'])) {
//    $arquivo = $uploaddir . $_FILES['img1']['name'];
    if (empty($id) || empty($d['nome']) || empty($d['valor']) || empty($d['categoria'])) {
        $_SESSION['msg'] = 'Preencha os Campos Obrigatórios!';
        header("Location: ../../painel/cad-produto?erro=100");
    } else {

        $pro->setEmpresa_id($id);
        $pro->setNome(ucfirst($d['nome']));
        $pro->setDescricao(strip_tags(ucfirst(nl2br($d['descricao']))));
        $pro->setValor(str_replace(",", ".", $d['valor']));
        $pro->setTipoproduto($d['categoria']);
        $pro->setSituacao("A");
//
        $id_pro = $prodao->PegaId($id);
////
        mkdir('../../produtos/' . $id . '/');
        mkdir('../../produtos/' . $id . '/' . $id_pro->getId() . '/');

        $diretorio = '../../produtos/' . $id . '/' . $id_pro->getId() . '/';
        $dt = md5(date("Y-m-d i:m:s"));

        $arquivo = isset($_FILES['principal']) ? $_FILES['principal'] : FALSE;
        $salvar = '/produtos/' . $id . '/' . $id_pro->getId() . '/' . $dt . $arquivo['name'];
        echo $destino = $diretorio . $dt . $arquivo['name'];
        if (move_uploaded_file($arquivo['tmp_name'], $destino)) {
            $pro->setImagem($salvar);
        } else {
            $pro->setImagem("");
        }
        echo var_dump($pro);

        $prodao->Inserir($pro);

        header("Location: ../../painel/cad-produto");
    }
}


if (isset($d['edit'])) {
//    $arquivo = $uploaddir . $_FILES['img1']['name'];
    if (empty($id) || empty($d['nome']) || empty($d['valor']) || empty($d['categoria'])) {
        $_SESSION['msg'] = 'Preencha os Campos Obrigatórios!';
        header("Location: ../../painel/edit-produto?erro=100");
    } else {
        $pro->setEmpresa_id($id);
        $pro->setNome(ucfirst($d['nome']));
        $pro->setDescricao(strip_tags(ucfirst(nl2br($d['descricao']))));
        $pro->setValor(str_replace(",", ".", $d['valor']));
        $pro->setTipoproduto($d['categoria']);
        $pro->setSituacao("A");
        $pro->setId($d['produto']);

        mkdir('../../produtos/' . $id . '/');
        mkdir('../../produtos/' . $id . '/' . $d['produto'] . '/');

        $diretorio = '../../produtos/' . $id . '/' . $d['produto'] . '/';

        $arquivo = isset($_FILES['principal']) ? $_FILES['principal'] : FALSE;
        $salvar = '/produtos/' . $id . '/' . $d['produto'] . '/' . $arquivo['name'];
        echo $destino = $diretorio . $arquivo['name'];
        if (move_uploaded_file($arquivo['tmp_name'], $destino)) {
            $pro->setImagem($salvar);
        } else {
            $pro->setImagem("");
            $img = $pro->setImagem("");
        }
        echo var_dump($pro);

        if ($img == null) {
            $prodao->EditarSemImagem($pro);
            header("Location: ../../painel/edit-produto?produto={$d['produto']}");
        }
        if ($img != null) {

            $prodao->Editar($pro);
            header("Location: ../../painel/edit-produto?produto={$d['produto']}");
        }
    }
}


if ($del != null) {

    $pro->setSituacao("I");
    $pro->setId($del);

    $prodao->Desativar($pro);

    header("Location: ../../painel/meus-produtos");
}

if ($remover != null) {
    $caminho = $imgdao->PegaCaminho($remover);

    if ($caminho->getCaminho() != null) {
        unlink('../..' . $caminho->getCaminho());
        $imgdao->Deletar($remover);
        header("Location: ../../painel/edit-produto?produto=$id_pro");
    } else {
        header("Location: ../../painel/edit-produto?produto=$id_pro");
    }
}