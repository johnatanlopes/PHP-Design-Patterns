<?php

date_default_timezone_set("Brazil/East");

require 'AcoesAoGerarNota.php';
require 'Item.php';
require 'NotaFiscal.php';
require 'Impressora.php';
require 'NotaFiscalDAO.php';
require 'EnviadorSMS.php';
require 'NotaFiscalBuilder.php';

$geradorDeNotas = new NotaFiscalBuilder();
$geradorDeNotas->setEmpresa( "Aleria");
$geradorDeNotas->setCnpj("123456");
$geradorDeNotas->addItem(new Item("Tijolo", 250));
$geradorDeNotas->addItem(new Item("Cimento 1kg", 250));
$geradorDeNotas->addItem(new Item("Cimento 1kg", 250));
$geradorDeNotas->addItem(new Item("Cimento 1kg", 250));
$geradorDeNotas->setObservacoes("Tijolos amarelos");
$geradorDeNotas->setDataEmissao();

// Realiza a ação para o observer
$geradorDeNotas->addAcao(new Impressora());
$geradorDeNotas->addAcao(new NotaFiscalDAO());
$geradorDeNotas->addAcao(new EnviadorSMS());

$notaFiscal = $geradorDeNotas->build();

echo "<pre>";
print_r($notaFiscal);
echo "</pre>";