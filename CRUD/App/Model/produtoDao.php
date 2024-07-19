<?php 

namespace App\Model;

use PDO;

class ProdutoDao{

    public function create(Produto $p){
        $sql = "INSERT INTO produtos(nome, descricao) VALUES (?,?)";
        $cadastrar = Conexao::getConn()->prepare($sql);
        $cadastrar->bindValue(1, $p->getNome());
        $cadastrar->bindValue(2, $p->getDescricao());

        $cadastrar->execute();

    }

    public function read(){
        $sql = "SELECT * FROM produtos";

        $cadastrar = Conexao::getConn()->prepare($sql);
        $cadastrar->execute();

        if($cadastrar->rowCount() > 0){
            $resultado = $cadastrar->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        }
        else{
            return [];
        }
    }

    public function update(Produto $p){
        $sql = "UPDATE produtos SET nome = ?, descricao = ? WHERE codigo = ?";
        $cadastrar = Conexao::getConn()->prepare($sql);
        $cadastrar->bindValue(1, $p->getNome());
        $cadastrar->bindValue(2, $p->getDescricao());
        $cadastrar->bindValue(3, $p->getCodigo());
        $cadastrar->execute();
    }

    public function delete($codigo){
        $sql = "DELETE FROM produtos WHERE codigo = ?";
        $cadastrar = Conexao::getConn()->prepare($sql);
        $cadastrar->bindValue(1, $codigo);
        $cadastrar->execute();
    }
    // 
}
