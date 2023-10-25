<?php
/**
 * Criar um objeto(classe) pessoa, 
 * que contemple os 2 tipos de pessoa(Juridica e Fisica) CNPJ e CPF
 * separando as suas caracteristicas/individualidades conforme o tipo
 * Ex.: Pessoa fisica(CPF) validar o CPF
 * Pessoa Juridica (CNPJ) validar o CNPJ
 *
 *
  * Pessoa Juridica (Empresa)
  * CNPJ(14), Razao Social, socios, nome fantasia, data fundacao
  *
  * Pessoa Fisica (CPF)
  * CPF(11), nome, pai, mae, apelido, data de nascimento
  */

  class Pessoa {
    // CPF
    public $cpf;
    public $nome;
    public $pai;
    public $mae;
    public $apelido;
    public $data_nascimento;
    // CNPJ
    public $cnpj = null;
    public $razao_social;
    public $nome_fantasia;
    public $socios;
    public $data_fundacao;

    public function isEmpresa() {
        return !empty($this->cnpj); // quando existir um cnpj retorna TRUE.
    }

    public function setCNPJ($cnpj) {
        $this->cnpj = $cnpj;
    }

  }
 
$pessoa = new Pessoa();
echo $pessoa->isEmpresa(); // false
$pessoa->setCNPJ('12313564489789');
echo $pessoa->isEmpresa(); // true

// relatorio
if ($pessoa->isEmpresa()) {
    // o nome da EMPRESA é:  .....
} else {
    // o nome da mae é:  null
}

$pessoa = new Pessoa();
echo $pessoa->isEmpresa(); // false
$pessoa->setCPF('123135');
echo $pessoa->isEmpresa(); // false

// calcular tempo de atividade
if ($pessoa->isEmpresa()) {
    $tempoAtividade =  (date("Y-m-d") - $pessoa->data_fundacao);
} else {
    $pessoa->idade;
}



