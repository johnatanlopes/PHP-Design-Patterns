<?php

error_reporting(0);
require 'ConnectionFactory.php';

$factory = new ConnectionFactory();
$conexao = $factory->getConnection();

echo "<pre>";
var_dump($conexao);
echo "</pre>";