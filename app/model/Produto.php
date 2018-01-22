<?php

class Produto {
    
    private $id;
    private $nome;
    private $descricao;
    private $valor;
    private $situacao;
    private $tipoproduto;
    private $empresa_id;
    private $imagem;
    
    function getImagem() {
        return $this->imagem;
    }

    function setImagem($imagem) {
        $this->imagem = $imagem;
    }

        
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getValor() {
        return $this->valor;
    }

    function getSituacao() {
        return $this->situacao;
    }

    function getTipoproduto() {
        return $this->tipoproduto;
    }

    function getEmpresa_id() {
        return $this->empresa_id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

    function setSituacao($situacao) {
        $this->situacao = $situacao;
    }

    function setTipoproduto($tipoproduto) {
        $this->tipoproduto = $tipoproduto;
    }

    function setEmpresa_id($empresa_id) {
        $this->empresa_id = $empresa_id;
    }


}
