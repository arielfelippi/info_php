<?php

interface IVeiculo {
    public function dirigir($chave);
}

abstract class Veiculo implements IVeiculo {
    public function dirigir($chave) {
        /*
         colocar cinto de seguranca
         colocar em ponto morto
         ligar o carro
         engatar a marcha
         acelerar
         solta a embreagem
        */
        echo "estou dirigindo... {$chave}<br>";
    }
}

class Carro extends Veiculo {
    public $chave = "chave_presencial";

    public function andar() {
        $this->dirigir($this->chave);
        echo "estou andando...<br>";
    }
}

class Trator extends Veiculo {
    public $chave = "chave_normal";

    public function arrar() {
        $this->dirigir($this->chave);
    }
}

class Carreta extends Veiculo {
    public $chave = "chave_canivete";

    public function viajar() {
        $this->verificarOleoMotor();
        $this->dirigir($this->chave);
    }

    public function verificarOleoMotor() {
    }

}

$carro = new Carro();
$carro->andar();
