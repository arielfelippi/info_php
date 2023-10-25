<?php

/**
 *  Implementar a classe estagiario
 *  Implementar a classe empregadoCLT
 *  Implementar a classe terceirizadoCNPJ
 *  Implementar a classe Folha de Pagamento
 */

interface Remuneravel {
    public function remuneracao();
}

class Estagiario implements Remuneravel {
    public $salario = 500;

    public function remuneracao() {
        // $this->salario = $this->salario * 2;
        $this->salario *= 2;
    }

    // bater ponto
}

class TerceirizadoCNPJ implements Remuneravel {
    public $salario = 50000;

    public function remuneracao() {
        // $this->salario = $this->salario * 2;
        $this->salario *= 2;
    }

    // horas de servico
}

class EmpregadoCLT implements Remuneravel {
    public $salario = 5000;

    public function remuneracao() {
        // $this->salario = $this->salario * 2;
        $this->salario *= 2;
    }

     /// bater ponto
}

class FolhaDePagamento {
    public Remuneravel $funcionario;

    public function pagar(Remuneravel $funcionario) {
        $this->funcionario = $funcionario;
        $this->funcionario->remuneracao();
    }

    public function __toString() {
        return "O salário é: {$this->funcionario->salario}<br>";
    }
}

$estagiario = new Estagiario();


$folha = new FolhaDePagamento();
$folha->pagar($estagiario);
echo $folha;

/**
 *  Metodologia mais usada
 */

class empregado {
    public $empregado = '';
    public function pagar() {
        if ($empregado == "clt") {
            // calculo salario
        } else if ($empregado == "estagiario") {
            // calculo salario
        } else if ($empregado == "free_lancer") {
            // calculo por empreitada/tarefas entregues
        } else { // terceiros
            // calculo horas trabalhadas
        }
    }
}
