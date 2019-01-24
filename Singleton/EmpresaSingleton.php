<?php

// O Singleton reaproveita a memória tendo somente um objeto
// O usuário será sempre obrigado a chamar sempre a instancia única
// O problema é que o getInstance() fica global, pode ser utilizado por qualquer local do sistema
// Não tem controle de quem acessa, por onde acessa...

class EmpresaSingleton {

    private $instance = null;

    // Criamos uma função com o mesmo nome da classe e deixamos ela privada para trabalhar como um construtor
    // Dessa forma somente ela pode ser chamada por ela mesma
    private function EmpresaSingleton() {}

    public static function getInstance() {
        if (is_null(self::$instance)) {
            self::$instance = new EmpresaSingleton();
        }

        return self::$instance;
    }

    public function criaContrato($nome, $valor) {
        return new Contrato($nome, $valor);
    }

    public function criaItem($item, $valor) {
        return new Item($item, $valor);
    }

    public function criaPedido($nome, $valor) {
        return new Pedido($nome, $valor);
    }

    public function finalizaPedido(Pedido $pedido) {
        // Diversas classes são chamadas
    }

}