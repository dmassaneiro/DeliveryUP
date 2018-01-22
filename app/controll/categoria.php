<?php

include_once '../autoLoad/AutoLoad.php';
session_start();
$id = $_SESSION['emp_id'];

$cat = new Categoria();
$catdao = new CategoriaDAO();

$dados = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);

if (isset($_POST['gravar'])) {

    if (empty($dados)) {
        header("Location: ../../painel/categorias?erro=100");
    } else {

        $filtro = $catdao->BuscarDados($dados);

        if ($filtro->getDescricao() != null) {
            header("Location: ../../painel/categorias?erro=200");
            echo 'ja tem';
        }
        if ($filtro->getDescricao() == null) {
            $cat->setDescricao(ucfirst($dados));
            $cat->setSit("A");

            $catdao->Inserir($cat);
            header("Location: ../../painel/categorias");
            echo 'nao tem';
        }
    }
}


