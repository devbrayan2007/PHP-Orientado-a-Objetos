<?php

class Veiculo{
    private $modelo;
    public $cor;
    public $ano;


    public function Andar(){
        echo "Andou!";
    }

    public function Parar(){
        echo "Parou!";
    }

    public function setModelo($m){
        $this->modelo = $m;
    }

    public function getModelo(){
        return $this->modelo;
    }

  
}

class Carro extends Veiculo{


    public function ligarLimpador(){
        echo "Ligando em 3..2..1";
    }

   
}


class Moto extends Veiculo{

    public function darGrau(){
        echo "Dando grau!";
    }

}

$veiculo = new Carro();
$veiculo->setModelo("Siena");
echo $veiculo->getModelo();
echo "<br>";
var_dump($veiculo);
