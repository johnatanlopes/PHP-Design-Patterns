<?php

// No visitor será impresso a expressão utilizada
// (1 + 3) + (3 - 2)

function carregaClasse($nomeDaClasse) {
    require $nomeDaClasse . ".php";
}

spl_autoload_register("carregaClasse");

$impressora = new Impressora();
$esquerdo = new Soma(new Numero(1), new Numero(3));
$direito = new Subtracao(new Numero(3), new Numero(2));
$soma = new Soma($esquerdo, $direito);

$soma->aceita($impressora);
echo " = ";
echo $soma->avalia();