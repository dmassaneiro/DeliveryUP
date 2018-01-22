<?php

class EnderecoEmpresa {
    
    private $id;
    private $cep;
    private $rua;
    private $bairro;
    private $numero;
    private $cidade;
    private $estado;
    private $complemento;
    private $empresa_id;
    
    function getEmpresa_id() {
        return $this->empresa_id;
    }

    function setEmpresa_id($empresa_id) {
        $this->empresa_id = $empresa_id;
    }

       
    
    function getId() {
        return $this->id;
    }

    function getCep() {
        return $this->cep;
    }

    function getRua() {
        return $this->rua;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getNumero() {
        return $this->numero;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getEstado() {
        return $this->estado;
    }

    function getComplemento() {
        return $this->complemento;
    }


    function setId($id) {
        $this->id = $id;
    }

    function setCep($cep) {
        $this->cep = $cep;
    }

    function setRua($rua) {
        $this->rua = $rua;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setComplemento($complemento) {
        $this->complemento = $complemento;
    }

    


    
}
