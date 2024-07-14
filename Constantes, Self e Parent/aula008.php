<?php


class Pessoa{
    const nome = "Brayan";

    public function exibirNome(){
        echo self::nome;
    }
}


class Brayan extends Pessoa{
    const nome = "Campos";


    public function exibirNome(){
        echo parent::nome;
    }
}

$brayan = new Brayan();
$brayan->exibirNome();