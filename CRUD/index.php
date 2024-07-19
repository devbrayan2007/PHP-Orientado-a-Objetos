<?php

require_once 'vendor/autoload.php';

$produto = new \App\Model\Produtos();
$produto->setNome("Notebook Dell");
$produto->setDescricao("i5, 8GB");

$produtoDao = new \App\Model\ProdutoDao();
$produtoDao->create($produto);
