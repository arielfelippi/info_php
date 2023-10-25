<?php

function soma($valor1, $valor2) {

    return $valor1 + $valor2;
}

function subtracao($valor1, $valor2) {

    return $valor1 - $valor2;
}

function multiplicacao($valor1, $valor2) {

    return $valor1 * $valor2;
}

function divisao($valor1, $valor2) {

    return $valor1 / $valor2;
}


function pot($valor1, $valor2) {

    return pow($valor1, $valor2);
}

function moduloDivisao($valor1, $valor2) {

    return $valor1 % $valor2;
}

function numeroPar($valor1) {
    $resto = moduloDivisao($valor1, 2);

    if ($resto == 0) {
        $par = 1;
    } else {
        $par = 0;
    }

    return $par;
}

function numeroAnoBissextop($valor1) {
    // Logica para calcular se o ano($valor1) é bissexto
    
}


function calcular($operador, $valor1, $valor2) {
    if ($operador == '+') {
        return soma($valor1, $valor2);
    }

    if ($operador == '-') {
        return subtracao($valor1, $valor2);
    }

    if ($operador == '*') {
        return multiplicacao($valor1, $valor2);
    }

    if ($operador == '/') {
        return divisao($valor1, $valor2);
    }

    if ($operador == '^') {
        return pot($valor1, $valor2);
    }

    if ($operador == '%') {
        return moduloDivisao($valor1, $valor2);
    }

    if ($operador == '!!') {
        return numeroPar($valor1);
    }

    if ($operador == '@@') {
        return numeroAnoBissextop($valor1);
    }
}


function exibirResultado($resultado) {
    echo $resultado . "<br>";
}


function exibirResultadoLogico($resultado, $valor1) {
    
    if ($resultado == 1) {
        $situacao = "par";
    } else {
        $situacao = "impar";
    }

    echo "O numero informado({$valor1}) é {$situacao}" . "<br>";
}

function verificarTipoOperador($operador, $resultado, $valor1) {

    /*
        '!!' = verificar par
        '##' = verifica primos
        '@@' = verifica se o $valor1 se ele é um ano bissexto.
    */ 
    $operadoresLogicos = [
        '!!',
        '##',
        '@@'
    ];

    if (in_array($operador, $operadoresLogicos)) {
        return exibirResultadoLogico($resultado, $valor1);
    } else {
        return exibirResultado($resultado);
    }
}


$operador = '@@';
$valor1 = 2022;
$valor2 = 10;

$resultado = calcular($operador, $valor1, $valor2);
echo verificarTipoOperador($operador, $resultado, $valor1);

