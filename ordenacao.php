<?php
/* Encontrar o maior valor em um conjunto de numeros em um array.
    E exibir esse valor ao final para o usuario.
    Implementar a logica para encontrar o 99;
    WHILE || FOR && IF
*/
// $nums = [10, 80, 5, 14, 90, 29, 500, 1]; // 0 - 7 (8)
// $tamanhoArray = count($nums); // 8
// $maior =0;

// for($i = 0; $i < $tamanhoArray; $i++) {
//     $posicaoAtual = $nums[$i];

//     if ($posicaoAtual  > $maior) {
//         $maior = $posicaoAtual;
//     }
// }

// echo $maior;

// /*
// 2-) Por meio da tecnica de ordenacao Bubble Sort,
//     ordene o array abaixo em ordem crescente. 
//     Dica: Utilize o laço de reptição FOR, pode ser necessario mais de um
//     e tambem deve ser utilizado um IF.
// */
// // 8, 12, 23, 34, 45, 67, 98
// $nums = [34, 12, 98, 45, 23, 67, 8];
// $tamanhoArray = count($nums);

// for($i = 0; $i < $tamanhoArray - 1; $i++) {
//     for ($j =  0; $j < $tamanhoArray - $i - 1 ; $j++) {
//         if ($nums[$j] > $nums[$j + 1]) {
//             $temp = $nums[$j];
//             $nums[$j] = $nums[$j +1];
//             $nums[$j+1] = $temp;
//         }
//     }
// }

// // class POO  = objeto POO => Programacao Orientada ao Objeto OOP
// // for | while | foreach | implode explode
// for($i = 0; $i < $tamanhoArray; $i++) {
//     echo $nums[$i] . "-";  // 8- 12- 98- ...
// }

// echo implode("-", $nums); // 8- 12- 98 ...




// Remover valores duplicados de um array.
$frutas = [
    "maçã",
    "banana",
    "laranja",
    "banana",
    "uva",
    "maçã","maçã",
];
 // Saida esperada: maçã, banana, laranja, uva
// Dica: in_array(), array_merge(), isset(), array_push()

$newFrutas = [];
for($i = 0; $i < count($frutas); $i++) {
    $frutaAtual = $frutas[$i];
    $estaNoArray = in_array($frutaAtual, $newFrutas);
    $naoEstaNoArray = !$estaNoArray;
    if ($naoEstaNoArray) {
        // adiciona no novo array, caso nao existir
        array_push($newFrutas, $frutas[$i]);
    }
}

// echo implode(",", $newFrutas);




// CONTAR valores duplicados de um array.
$frutas = [
    "maçã",
    "banana",
    "laranja",
    "banana",
    "uva",
    "maçã",
    "maçã",
];
 // Saida esperada: 3maçã, 2banana, 1laranja, 1uva
// Dica: in_array(), array_merge(), isset(), array_push()

$newFrutas = [];
for($i = 0; $i < count($frutas); $i++) {
    $frutaAtual = $frutas[$i]; // maca

    if (!isset($newFrutas[$frutaAtual])) {
        $newFrutas[$frutaAtual] = 1; // [maca => 1]
    } else {
        $newFrutas[$frutaAtual] += 1; // [maca => 3]
    }
}

echo implode(",", $newFrutas);

