<?php 

class Login{

    public function cadastrarEmail($email){

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            throw new Exception("Este email é inválido!", 1);
        }
        else{
            echo "Seu email foi cadastrado com sucesso!";
        }
    }
}


$login = new Login();

try{
    $login->cadastrarEmail("brayanrcampos");
}
catch(Exception $e){
    echo "Mensagem: ".$e->getMessage() . "<br>";
    echo "Código: ".$e->getCode(). "<br>";
    echo "Linha: ".$e->getLine(). "<br>";
    echo "Arquivo: ".$e->getFile(). "<br>";
}
