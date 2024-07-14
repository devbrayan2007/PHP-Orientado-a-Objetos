<?php


abstract class Banco{
    protected $saldo;
    protected $limiteSaque;
    protected $juros;

    public function setSaldo($s){
        $this->saldo = $s;
    }

    public function getSaldo(){
        return $this->saldo;
    }


    abstract protected function Sacar($s);
    abstract protected function Depositar($d);
}

class Itau extends Banco{

    public function Sacar($s){
        $this->saldo -= $s;
        echo "Sacou R$". $s;
    }

    public function Depositar($d){
        $this->saldo += $d;
        echo "Depositou R$". $d;
    }

}


class BancoDoBrasil extends Banco{

    public function Sacar($s){
        $this->saldo -= $s;
        echo "Sacou R$". $s;
    }

    public function Depositar($d){
        $this->saldo += $d;
        echo "Depositou R$". $d;
    }

}


// BANCO ITAU

$itau = new Itau();
$itau->setSaldo(1000);
echo "Saldo: R$". $itau->getSaldo();
echo "<hr>";
$itau->Sacar(250);
echo "<hr>";
echo "Saldo Atual: R$". $itau->getSaldo();
echo "<hr>";
$itau->Depositar(900);
echo "<hr>";
echo "Saldo Atual: R$". $itau->getSaldo();



