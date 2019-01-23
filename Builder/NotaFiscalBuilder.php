<?php

class NotaFiscalBuilder {

    private $empresa;
    private $cnpj;
    private $itens;
    private $valorBruto;
    private $valorImpostos;
    private $observacoes;
    private $dataEmissao;

    function __construct() {
        $this->valorBruto = 0;
        $this->valorImpostos = 0;
        $this->itens = array();
    }

    public function setEmpresa($empresa) {
        $this->empresa = $empresa;
    }

    public function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }

    public function addItem(Item $item) {
        $this->itens[] = $item;
        $this->valorBruto += $item->getValor();
        $this->valorImpostos += $item->getValor() * 0.2;
    }

    public function setObservacoes($observacoes) {
        $this->observacoes = $observacoes;
    }

    public function setDataEmissao($data = null) {
        if (is_null($data)) {
            $this->dataEmissao = date("Y-m-d h:i:s");
        } else {
            $this->dataEmissao = $data;
        }
    }

    public function build() {
        $nf = new NotaFiscal($this->empresa, $this->cnpj, $this->itens, 
            $this->valorBruto, $this->valorImpostos, $this->observacoes, $this->dataEmissao);
        return $nf;
    }


}