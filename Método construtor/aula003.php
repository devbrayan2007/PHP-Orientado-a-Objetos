<?php

class Login{
    private $email;
    private $password;
    private $username;

    public function __construct($email, $password, $username){
        $this->username = $username;
        $this->setEmail($email);
        $this->setPassword($password);

    }

    public function getUserName(){
        return $this->username;
    }


    // Atributo email
    public function getEmail(){
        return $this->email;
    }

    public function setEmail($e){
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }

    // Atributo senha
    public function getPassword(){
        return $this->password;
    }

    public function setPassword($s){
        $this->password = $s;

    }

    public function login(){
        if($this->email == "brayanrcampos0@gmail.com" and $this->password == "301221"){
            echo "Login feito com sucesso!";
        }
        else{
            echo "Dados inválidos!";
        }
    }
}

$login = new Login("brayanrcampos0@gmail.com", "301221", "Brayan R Campos");
$login->login();

echo "<hr>";
echo "<h3>Seus Dados</h3>";
echo "Nome de usuário: ". $login->getUserName() . "<br>";
echo "Senha: ". $login->getPassword(). "<br>";
echo "Email: ". $login->getEmail() . "<br>";
