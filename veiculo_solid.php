<?php

interface IVeiculo {
    public function dirigir($chave);
}

class Veiculo {
    public IVeiculo $veiculo;

    public function locomover(IVeiculo $veiculo) {
        $this->veiculo = $veiculo;
    }

    public function __toString() {
        echo $this->veiculo;
    }
}

class Carro implements IVeiculo {
    public $chave = "chave_presencial";
    public $airbag = "motorista_carona";

    public function dirigir($chave) {
        $this->chave = $chave;
        echo "estou andando... {$this->chave}<br>";
    }
    
    public function setAirBag($airbag) {
        $this->airbag = $airbag;
        echo "o airbag é... {$this->airbag}<br>";
    }
    
}

class Trator implements IVeiculo {
    public $chave = "chave_normal";

    public function dirigir($chave) {
        $this->chave = $chave;
        echo "estou andando... {$this->chave}<br>";
    }
}

class Carreta implements IVeiculo {
    public $chave = "chave_canivete";

    public function dirigir($chave) {
        $this->chave = $chave;
        $oleo = $this->verificarOleoMotor();
        echo "estou andando... {$this->chave}<br>" . $oleo;
    }

    public function verificarOleoMotor() {
        return "Oleo esta OK!<br>";
    }

}


class Moto implements IVeiculo {
    public $chave = "chave_normal";

    public function dirigir($chave) {
        $this->chave = $chave;
        echo "estou andando... {$this->chave}<br>";
    }
}

$cahve = "xyz";

$carro = new Carro();
$carro->dirigir($cahve);
$carro-setAirBag("airbag_lateral");

$carreta = new Carreta();
$carreta->dirigir("abc");


$moto = new Moto();
$moto->dirigir($cahve);

$veiculo = new Veiculo();
echo $veiculo->locomover($moto);

