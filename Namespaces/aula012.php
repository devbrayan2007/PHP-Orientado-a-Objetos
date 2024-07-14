<?php

require 'Classes/produto.php';
require 'Models/produto.php';

use classes\Produto as ProdutoClasse;
use models\Produto as ProdutoModels;

$produto = new ProdutoClasse();
$produto->mostrarDetalhes();
echo "<hr>";
$produto = new ProdutoModels();
$produto->mostrarDetalhes();
