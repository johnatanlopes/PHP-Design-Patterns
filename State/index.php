<?php

require "Orcamento.php";
require 'EstadoDeUmOrcamento.php';
require 'EmAprovacao.php';
require 'Aprovado.php';
require 'Reprovado.php';
require 'Finalizado.php';

$reforma = new Orcamento(490);
echo "Valor inicial da reforma: " . $reforma->getValor() . "<br>";

$reforma->aplicaDesconto();
echo "Desconto aplicado Em aprovacao: " . $reforma->getValor() . "<br>";

$reforma->aprova();
$reforma->aplicaDesconto();
echo "Reforma aprovada com desconto: " . $reforma->getValor();