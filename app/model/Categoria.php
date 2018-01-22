<?php

class Categoria {
   
    private $id;
    private $descricao;
    private $sit;
    
    function getId() {
        return $this->id;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getSit() {
        return $this->sit;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setSit($sit) {
        $this->sit = $sit;
    }


}
