<?php

class Orcamento {

    private $valor;
    private $estado;

    public function __construct($valor) {
        $this->valor = $valor;
        $this->estado = new EmAprovacao();
    }

    public function getValor() {
        return $this->valor;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }

    public function aplicaDesconto() {
        $this->estado->aplica($this);
    }

    public function aprova() {
        $this->estado->aprova($this);
    }

    public function reprova() {
        $this->estado->reprova($this);
    }

    public function finaliza() {
        $this->estado->finaliza($this);
    }

}
