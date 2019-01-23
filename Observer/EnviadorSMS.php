<?php

class EnviadorSMS implements AcoesAoGerarNota {
    public function executa(NotaFiscal $nf) {
        echo "<br> Enviei o SMS ! <br>";
    }
}