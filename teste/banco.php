<?php

if(isset($_POST["btn-depositar"])){
    echo "Sucesso ao depositar!";
}

if(isset($_POST["btn-sacar"])){
    echo "Sucesso ao sacar!";
}



abstract class Banco{
    protected $saldo;
    protected $limiteSaque;

     public function setSaldo($s){
        $this->saldo = $s;
     }

     public function getSaldo($d){
        return $this->saldo;
     }

  

    abstract protected function Sacar($s);
    abstract protected function Depositar($d);
}


class Bradesco extends Banco{

    public function Sacar($s){
        $this->saldo -= $s;
        echo "Sacou R$". $s;
    }

    public function Depositar($d){
        $this->saldo += $d;
        echo "Depositou R$". $d;
    }
}


$bradesco = new Bradesco();
$bradesco->setSaldo($_POST['saldo']);
$bradesco->Sacar($_POST['sacar']);
$bradesco->Depositar($_POST['deposito']);
