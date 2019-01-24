<?php

class ComandoFinalizar implements Comando {

    private $pedido;

    function __construct($pedido) {
        $this->pedido = $pedido;
    }

    public function executa() {
        $this->pedido->finalizar();
    }

}