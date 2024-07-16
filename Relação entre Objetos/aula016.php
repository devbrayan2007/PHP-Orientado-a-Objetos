<?php

// Agregação

class Produtos{
    public $nome;
    public $valor;

    function __construct($nome, $valor){
        $this->nome = $nome;
        $this->valor = $valor;
    }
}


class Carrinho{
    public $produtos;


    public function Adiciona(Produtos $produto){
        $this->produtos[] = $produto;

    }

    public function Exibe(){
        foreach($this->produtos as $produto){
            echo $produto->nome. "<br>";
            echo $produto->valor. "<br>";
            echo "<hr>";
        }
    }
}

$produto1 = new Produtos("Notebook", 1500);
$produto2 = new Produtos("Mouse", 50);

$carrinho = new Carrinho();
$carrinho->Adiciona($produto1);
$carrinho->Adiciona($produto2);
$carrinho->Exibe();
