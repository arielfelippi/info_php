<?php

/**
 *  Implementar a classe estagiario
 *  Implementar a classe empregadoCLT
 *  Implementar a classe terceirizado
 *  Implementar a classe Folha de Pagamento
 */

interface Remuneravel {
    public function remuneracao();
}

class Estagiario implements Remuneravel {
    public $salario = 500;

    public function remuneracao() {
        // $this->salario = $this->salario * 2;
        echo $this->salario *= 2;
    }
}

class FolhaDePagamento {
    public Remuneravel $funcionario;

    public function pagar(Remuneravel $funcionario) {
        $this->funcionario = $funcionario;
        $this->funcionario->remuneracao();
    }
}
