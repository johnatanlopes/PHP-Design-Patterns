<?php

function carregaClasse($nomeDaClasse) {
    require $nomeDaClasse . ".php";
}

spl_autoload_register('carregaClasse');

$pedido1 = new Pedido("João", 250);
$pedido2 = new Pedido("Marcelo", 352);
$pedido3 = new Pedido("Bianca", 200);
$pedido4 = new Pedido("Elisa", 100);
$pedido5 = new Pedido("Carol", 50);

$fila = new FilaDeExecucao();
$fila->add(new ComandoPagar($pedido1));
$fila->add(new ComandoPagar($pedido2));
$fila->add(new ComandoPagar($pedido3));
$fila->add(new ComandoPagar($pedido4));
$fila->add(new ComandoPagar($pedido5));
$fila->add(new ComandoFinalizar($pedido3));

$fila->processa();

print_r($pedido1);