<?php

// OOP || POO
// funcoes ||  metodos
//  objeto||classe
//  propriedades || atributos
 class Carro {
    const NRO_CHASSI = 'a4s5d65asd4564das65asd';
    private $marca;
    protected $modelo;
    public $ano;

    private function ligar($chave, $cartao) {
        if(true){}
        if(true){}
    }

    protected function trocarMarcha() {
    }

    private function arrumarMotor() {
        $this->ligar(); // 
        self::NRO_CHASSI; // 'a4s5d65asd4564das65asd'
    }
}

// $carro = new Carro();
//  $carro->ligar($chave, $cartao);






class Pessoa {
    public $nome;
    public $idade;
    public $sexo;
    public $nomeMae;
    public $nomePai;
    public $estadoCivil;
    public $profissao;
    public $escolaridade;
    public $telefone;

    public function __construct($nome = "Beto", $idade, $sexo, $nomeMae, $nomePai, $estadoCivil, $profissao, $escolaridade, $telefone ="") {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->nomeMae = $nomeMae;
        $this->nomePai = $nomePai;
        $this->estadoCivil = $estadoCivil;
        $this->profissao = $profissao;
        $this->escolaridade = $escolaridade;
        $this->telefone = $telefone;
    }

    public function dormir() {}
    public function acordar() {}
    public function caminhar() {}
    public function falar() {}

    public function __toString() {
        return $this;
    }

}

$nome = "Joao  do Caminhao";
$idade = "22";
$sexo = "M";
$nomeMae = "Joana do Kombi";
$nomePai = "José do Fusca";
$estadoCivil = "Solteiro";
$profissao = "Programador";
$escolaridade = "Superior Completo";
$telefone = "54912345678";

$pessoa = new Pessoa($nome, $idade, $sexo, $nomeMae, $nomePai, $estadoCivil, $profissao, $escolaridade, $telefone);
echo $pessoa; // faz carteira






