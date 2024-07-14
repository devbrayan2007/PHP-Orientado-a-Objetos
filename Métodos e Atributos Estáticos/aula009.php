<?php


class Login{
    public static $usuario;

    // Método estático
    public static function verificarLogin(){
        echo "O usuário ". self::$usuario. " está logado!";
    }

    // Método não estático
    public function sairSistema(){
        echo "O usuário saiu";
    }
}

// Chamando método estático
Login::$usuario = "admin";
Login::verificarLogin();

echo "<br>";
echo "<hr>";

// Chamando método comum(não estático)
$login = new Login();
$login->sairSistema();