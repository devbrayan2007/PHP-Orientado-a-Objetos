<?php

namespace App\Model;

class Produto{

    private $codigo, $nome, $descricao;


    // ATRIBUTO NOME
    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    // ATRIBUTO DESCRIÇÃO
    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    // ATRIBUTO CÓDIGO
    public function getCodigo(){
        return $this->codigo;
    }

    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }
}
