<?php

class ImagemProduto {
    
    private $id;
    private $caminho;
    private $produt_id;
    
    function getId() {
        return $this->id;
    }

    function getCaminho() {
        return $this->caminho;
    }

    function getProdut_id() {
        return $this->produt_id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCaminho($caminho) {
        $this->caminho = $caminho;
    }

    function setProdut_id($produt_id) {
        $this->produt_id = $produt_id;
    }


}
