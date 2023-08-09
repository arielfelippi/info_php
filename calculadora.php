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


// echo "O valor é: {$resultado}";

for ($i = 0; $i < 10; $i++) {
  // echo "O valor do i é: {$i}<br>";
}

$i = 11;
while ($i < 10) {
  echo "WHILE: O valor do i é: {$i}<br>";
  $i++;
}

$i = 11;
do {
  echo "DO WHILE: O valor do i é: {$i}<br>";
  $i++;
} while ($i < 10);

/**
 * Média Harmonica
 * 
 * Média Ponderada
 * $media = 6
 * $prova = 4.8
 * $peso = 5
 * $prova2 = 1.5
 * $peso2 = 3
 * $prova3 = 2
 * $peso3 = 2
 * $numerador = ($prova * $peso) + ($prova2 * $peso2) + ($prova3 * $peso3);
 * $denominador = ($peso + $peso2 + $peso3);
 * $MP = $numerador / $denominador;
 */

 $media = 6;

 $prova = 4.8;
 $peso = 5;
 $prova2 = 1.5;
 $peso2 = 3;
 $prova3 = 2;
 $peso3 = 2;
 $numerador = ($prova * $peso) + ($prova2 * $peso2) + ($prova3 * $peso3);
 $denominador = ($peso + $peso2 + $peso3);
 $MP = $numerador / $denominador;

if ($MP >= $media) {
 // aprovado
} else {
  // reprovado
}
