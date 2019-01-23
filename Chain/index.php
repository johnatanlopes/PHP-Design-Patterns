<?php

require "Orcamento.php";
require 'Item.php';
require 'Desconto.php';
require 'Desconto5Itens.php';
require 'Desconto500Reais.php';
require 'Desconto300Reais.php';
require 'SemDesconto.php';
require 'CalculadoraDeDescontos.php';

$reforma = new Orcamento(301);
$reforma->addItem(new Item('Tijolo', 250));
$reforma->addItem(new Item('Cimento 1kg', 250));
$reforma->addItem(new Item('Cimento 1kg', 250));
$calculadoraDeDescontos = new CalculadoraDeDescontos();
echo "Desconto: " . $calculadoraDeDescontos->desconto($reforma);