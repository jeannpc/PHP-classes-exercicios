<?php
require 'Produto.class.php';
$p=new Produto();
$p->setDescricao("computador Lenovo");
$dados = $p -> getDescricao();
echo 'O conteúdo do atributo é: ',$dados;

