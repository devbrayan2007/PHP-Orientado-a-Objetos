<?php

namespace App\Model;

class Conexao{
    private static $instancia;

    public static function getConn(){
        if(!isset(self::$instancia)){
            self::$instancia = new \PDO('mysql: host=localhost; dbname=pdo; charset=utf-8', 'root', '');

        }
        return self::$instancia;
    }
}