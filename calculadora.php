<?php
/* 
 * (+) Adição
 * (-) Subtração
 * (*) Multiplicação
 * (/) Divisão
 * (pot) Potenciação
 * (numPar)(% = modulo) Numero par
 * (perc) Percentual(Desconto)
 * (perc+) Percentual(Acrescimo)
 * (ma) Media aritmetica
*/

$value = 100;
$value2 = 10;
$operador = 'perc';
$resultado = 0 ; 


if ($operador == 'perc'){
  $desconto = ($value * $value2) / 100;
  $resultado = $value - $desconto; 
} 

if ($operador == 'perc+'){
  $acrescimo = ($value * $value2) / 100;
  $resultado = $value - $acrescimo; 
} 

if ($operador == 'ma'){ // 100 + 10  /2 = 55
  $resultado = ($value + $value2) / 2;
} 

if ($operador == 'numPar') {
  $restoDivisao = $value % 2; // 0 || 1...
  $restoDivisao2 = $value2 % 2;

  if ($restoDivisao == 0 && $restoDivisao2 == 0) {
    $saoPares = true;
  } else {
    $saoPares = false;
  }
  $saoPares = ($restoDivisao == 0 && $restoDivisao2 == 0);


  if($saoPares) {
    echo "Os valores informados são pares.";
  }
} 


echo "O valor é: {$resultado}";
