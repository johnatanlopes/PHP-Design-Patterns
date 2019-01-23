<?php

date_default_timezone_set("Brazil/East");

require 'Item.php';
require 'NotaFiscal.php';
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

$notaFiscal = $geradorDeNotas->build();

echo "<pre>";
print_r($notaFiscal);
echo "</pre>";