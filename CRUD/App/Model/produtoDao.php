<?php

namespace App\Model;

class ProdutoDao{
    

    public function create(Produtos $p){
        $sql = 'INSERT INTO produtos(nome,descricao) VALUES (?,?)';
        $cadastrar = Conexao::getConn()->prepare($sql);
        $cadastrar->bindValue(1, $p->getNome());
        $cadastrar->bindValue(2, $p->getDescricao());

        $cadastrar->execute();
    }

    public function read(){

    }

    public function update(Produtos $p){

    }

    public function delete($codigo){

    }
}