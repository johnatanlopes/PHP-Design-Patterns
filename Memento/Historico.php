<?php

class Historico {

    private $estadosContrato;
    
    public function __construct() {
        $this->estadoscONTRATO = array();
    }

    public function getEstado($index) {
        return $this->estadosContrato[$index];
    }

    public function addEstado(Estado $estado) {
        $this->estadosContrato[] = $estado;
    }

}