<?php

require_once 'vendor/autoload.php';


$produto = new App\Model\Produto;
$produto->setNome("Cadeira Gamer");
$produto->setDescricao("TGT Heron");
$produto->setCodigo(2);


$produtoDao = new \App\Model\ProdutoDao();
/*
$produtoDao->create($produto);
$produtoDao->read($produto);
$produtoDao->update($produto);
*/
$produtoDao->delete(3);

foreach($produtoDao->read() as $produto){
    echo $produto['nome']."<br>".$produto['descricao']."<hr>";
}
