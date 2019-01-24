<?php

function carregaClasse($nomeDaClasse) {
    require $nomeDaClasse . ".php";
}

spl_autoload_register("carregaClasse");

// Data utilizando modelo estrutural
echo date("d/m") . "<br>";

// Data utilizando modelo OO, como refatoramos adaptamos nossa data
// Também implementamos uma interface Data em Relogio, dessa forma se outra classe precisar utilizar datas vai 
//      saber que será necessário implementar seu contrato
$data = new Relogio();
echo $data->getDia() . "/" . $data->getMes() . "<br>";
