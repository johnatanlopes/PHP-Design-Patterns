<?php

function carregaClasse($nomeDaClasse) {
    require $nomeDaClasse . ".php";
}

spl_autoload_register("carregaClasse");

$esquerdo = new Soma(new Numero(1), new Numero(3));
$direito = new Subtracao(new Numero(3), new Numero(2));
$soma = new Soma($esquerdo, $direito);

echo "<pre>";
print_r($soma);
echo "</pre>";

echo $soma->avalia();