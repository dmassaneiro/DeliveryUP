<?php

class Empresa {
   
    private $id;
    private $nome;
    private $telefone1;
    private $telefone2;
    private $cnpj;
    private $anos;
    private $email;
    private $logo;
    private $sobre;
    private $missao;
    private $sit;
    private $senha;
    
    function getSenha() {
        return $this->senha;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

        
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getTelefone1() {
        return $this->telefone1;
    }

    function getTelefone2() {
        return $this->telefone2;
    }

    function getCnpj() {
        return $this->cnpj;
    }

    function getAnos() {
        return $this->anos;
    }

    function getEmail() {
        return $this->email;
    }

    function getLogo() {
        return $this->logo;
    }

    function getSobre() {
        return $this->sobre;
    }

    function getMissao() {
        return $this->missao;
    }

    function getSit() {
        return $this->sit;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setTelefone1($telefone1) {
        $this->telefone1 = $telefone1;
    }

    function setTelefone2($telefone2) {
        $this->telefone2 = $telefone2;
    }

    function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }

    function setAnos($anos) {
        $this->anos = $anos;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setLogo($logo) {
        $this->logo = $logo;
    }

    function setSobre($sobre) {
        $this->sobre = $sobre;
    }

    function setMissao($missao) {
        $this->missao = $missao;
    }

    function setSit($sit) {
        $this->sit = $sit;
    }


}
