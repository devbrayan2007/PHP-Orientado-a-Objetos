<?php


class Formulario{
    public $nome;
    public $email;
    public $senha;



    protected function Logar(){
        echo "Logado!";
    }

    public function sairDoLogin(){
        echo "Desconectado!";
    }

   

}

class NomeUsuario extends Formulario{

    public function nomeLogado(){
        echo "Nome aceito!";
    }

    public function mostrarLogin(){
        $this->Logar();
    }

}


class SenhaUsuario extends Formulario{
    
    public function senhaLogada(){
        echo "Senha aceita!";
    }

}

class EmailUsuario extends Formulario{

    public function emailLogado(){
        echo "Email válido!";
    }
}

$formulario = new NomeUsuario();
$formulario->mostrarLogin();
