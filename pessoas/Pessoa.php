<?php

require_once "PessoaFisica.php";
require_once "PessoaJuridica.php";

class Pessoa {

    public function definirPessoa() {
        $pessoaF = new PessoaFisica();
        $pessoaF->setCPF("232546546");
    }
}
