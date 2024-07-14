<?php



abstract class Banco{
    protected $saldo;
    protected $limiteSaque;
    protected $somar;

     public function setSaldo($s){
        $this->saldo = $s;
     }

     public function getSaldo($d){
        return $this->saldo;
     }

  

    abstract protected function Sacar($s);
    abstract protected function Depositar($d);
    abstract protected function VizualizarSaldo($v);
    abstract protected function somarSaldo($soma, $s, $v);
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

    public function VizualizarSaldo($v){
        $this->saldo = $v;
        echo "<h3>Saldo Atual: R$". $v . "</h3><br>";
    }

    public function somarSaldo($soma, $s, $v){
        $this->somar = $soma;
        $soma = $v + $s;
        echo "Saldo Atualizado: R$ ". $soma;
    }
}


if(isset($_POST['btn-sacar'])){
    $bradesco = new Bradesco();
    $bradesco->Sacar($_POST['sacar']);
    $bradesco->VizualizarSaldo($_POST['saldo']);
    
}

if(isset($_POST['btn-depositar'])){
    $bradesco = new Bradesco();
    $bradesco->Depositar($_POST['deposito']);
    //$bradesco->somarSaldo($_POST['saldo']);
}