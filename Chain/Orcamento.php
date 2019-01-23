<?php

class Orcamento {

    private $valor;
    private $itens;

    public function __construct($valor) {
        $this->valor = $valor;
        $this->itens = array();
    }

    public function getValor() {
        return $this->valor;
    }

    public function getItens() {
        return $this->itens;
    }

    public function addItem($item) {
        $this->itens[] = $item;
    }

}
