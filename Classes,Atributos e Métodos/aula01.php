<?php

class Pessoa{
    // Atributos
    public $nome; 
    public $idade;

    // Métodos
    public function Falar(){
        echo $this->nome. " de ".$this->idade. " anos ". " acabou de falar.". "<br>";
    }
}

$brayan = new Pessoa();
$brayan->nome = "Brayan Campos";
$brayan->idade = 17;
$brayan->Falar();

echo "<br>";

echo $brayan->nome;