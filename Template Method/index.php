<?php

require "Orcamento.php";
require 'Imposto.php';
require 'TemplateDeImpostoCondicional.php';
require 'CalculadoraDeImpostos.php';
require 'ICMS.php';
require 'ISS.php';
require 'KCV.php';

$reforma = new Orcamento(500);
$calculadora = new CalculadoraDeImpostos();
echo "Valor do ICMS: " . $calculadora->calcula($reforma, new ICMS()) . "<br>";
echo "Valor do ISS: " . $calculadora->calcula($reforma, new ISS()) . "<br>";
echo "Valor do KCV: " . $calculadora->calcula($reforma, new KCV());