<?php

function carregaClasse($nomeDaClasse) {
    require $nomeDaClasse . ".php";
}

spl_autoload_register("carregaClasse");

$historico = new Historico();
$contrato = new Contrato("PHP", date('Y-m-d'));

echo "<pre>";
print_r($contrato);
echo "</pre>";

$historico->addEstado($contrato->salvaEstado());
$contrato->avanca();

echo "<pre>";
print_r($contrato);
echo "</pre>";

$historico->addEstado($contrato->salvaEstado());
$contrato->avanca();

echo "<pre>";
print_r($contrato);
echo "</pre>";

echo "<pre>";
print_r($historico->getEstado(0));
echo "</pre>";

echo "<pre>";
print_r($historico->getEstado(1));
echo "</pre>";
