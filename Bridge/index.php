<?php

function carregaClasse($nomeDaClasse) {
    require $nomeDaClasse . ".php";
}

spl_autoload_register("carregaClasse");

// Quando temos classe que acessam recursos que não estão em nosso sistema é chamado de bridge (Ponte)
// É necessário criar um contrato para os demais recursos seguirem um padrão
$mapa = new GoogleMaps();
$mapa->getMapa();