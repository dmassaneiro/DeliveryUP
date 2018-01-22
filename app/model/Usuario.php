<?php

class Usuario {
    
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $dataNascimento;
    private $cpf;
    private $imagem;
    private $dataCadastro;
    private $telefone1;
    private $telefone2;
    private $telefone3;
    
    function getDataCadastro() {
        return $this->dataCadastro;
    }

    function getTelefone1() {
        return $this->telefone1;
    }

    function getTelefone2() {
        return $this->telefone2;
    }

    function getTelefone3() {
        return $this->telefone3;
    }

    function setDataCadastro($dataCadastro) {
        $this->dataCadastro = $dataCadastro;
    }

    function setTelefone1($telefone1) {
        $this->telefone1 = $telefone1;
    }

    function setTelefone2($telefone2) {
        $this->telefone2 = $telefone2;
    }

    function setTelefone3($telefone3) {
        $this->telefone3 = $telefone3;
    }

                
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getEmail() {
        return $this->email;
    }

    function getSenha() {
        return $this->senha;
    }

    function getDataNascimento() {
        return $this->dataNascimento;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getImagem() {
        return $this->imagem;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setDataNascimento($dataNascimento) {
        $this->dataNascimento = $dataNascimento;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setImagem($imagem) {
        $this->imagem = $imagem;
    }


    
}
