<?php

class Pessoa{
    private $dados = array();

    public function __set($nome, $valor){
        $this->dados[$nome] = $valor;
    }

    public function __get($nome){
        return $this->dados[$nome];
    }

    public function __tostring(){
        return "Tentei imprimir o objeto";
    }

    public function __invoke(){
        return "Objeto como função.";
    }
}


$pessoa = new Pessoa();
$pessoa->nome = "Brayan";
$pessoa->idade = 17;
$pessoa->sexo = "M";


//echo $pessoa->nome;

echo $pessoa . "<br>";
echo $pessoa();