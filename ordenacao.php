<?php
/* Encontrar o maior valor em um conjunto de numeros em um array.
    E exibir esse valor ao final para o usuario.
    Implementar a logica para encontrar o 99;
    WHILE || FOR && IF
*/
$nums = [10, 80, 5, 14, 90, 29, 500, 1]; // 0 - 7 (8)
$tamanhoArray = count($nums); // 8
$maior =0;

for($i = 0; $i < $tamanhoArray; $i++) {
    $posicaoAtual = $nums[$i];

    if ($posicaoAtual  > $maior) {
        $maior = $posicaoAtual;
    }
}

echo $maior;

/*
2-) Por meio da tecnica de ordenacao Bubble Sort,
    ordene o array abaixo em ordem crescente. 
    Dica: Utilize o laço de reptição FOR, pode ser necessario mais de um
    e tambem deve ser utilizado um IF.
*/
// 8, 12, 23, 34, 45, 67, 98
$nums = [34, 12, 98, 45, 23, 67, 8];
$tamanhoArray = count($nums);

for($i = 0; $i < $tamanhoArray; $i++) {
    for ($j =  $tamanhoArray / 2; $j < 1 ; $j++) {

    }
}

