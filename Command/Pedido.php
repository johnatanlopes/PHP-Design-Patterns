<?php

class Pedido {

    private $cliente;
    private $valor;
    private $status;

    function __construct($cliente, $valor) {
        $this->cliente = $cliente;
        $this->valor = $valor;
        $this->status = new Novo();
    }

    public function pagar() {
        $this->status = new pago();
    }

    public function finalizar() {
        echo "Finalizando o pedido do cliente " . $this->getCliente() . "<br>";
        $this->status = new Finalizado();
    }

    public function getCliente() {
        return $this->cliente;
    }

}