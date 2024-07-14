<?php

class Pessoa{
      public $idade;

      public function __clone(){
        echo "Clonagem de Objetos" . "<br>";       
      }
}

$pessoa = new Pessoa();
$pessoa->idade = 17;

$pessoa2 = clone $pessoa;
$pessoa2->idade = 25;

echo $pessoa->idade;
echo "<hr>";
echo $pessoa2->idade;

