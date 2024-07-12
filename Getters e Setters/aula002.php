<?php


class Login{
    private $email;
    private $senha;

    public function getEmail(){
            return $this->email;
    }

    public function setEmail($e){
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }

    public function getSenha(){
            return $this->senha;
    }

    public function setSenha($s){
        $this->senha = $s;
    }

    public function logar(){
        if($this->email == "devbrayan2007@gmail.com" and $this->senha == "23012007"){
            echo "Logado com sucesso!";
        }
        else{
            echo "Dados inválidos!";
        }
    }
}

$logar = new Login();
$logar->setEmail("devbrayan()///2007@gmail.com");
$logar->setSenha("23012007");
$logar->logar();
echo "<hr>";
echo $logar->getEmail();
echo "<br>";
echo "<br>";
echo $logar->getSenha();