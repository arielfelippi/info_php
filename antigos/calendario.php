<?php

/*
 Implementar a logica de um calendario,
 considerando os dias validos para cada mes
 e os anos bissexto. Caso for informada uma data invalida,
 corrigir para proxima data valida, Ex.: 31/04/1990 => 01/05/1990;
 E quando for ano bissexto informar que o ano é bissexto,
 Ex.: 2022 => O ano é bissexto.
 Ex.: 2100 => O ano NÃO é bissexto.
*/
                          
$dataStr = "29/05/1990";
$data = explode("/", $dataStr);
$dia = (int) $data[0];
$mes = (int) $data[1];
$ano = (int) $data[2]; // '1990' => 1990

$meses30dias = [4, 6, 9, 11];
$meses31dias = [1, 3, 5, 7, 8, 10, 12];

function isBissexto($ano) {
    if ( ($ano % 4 == 0) && ($ano % 100 != 0 || $ano % 400 == 0) ) {
        return true;
    } else {
        return false;
    }
}

// ajuste para dias invalidos
if ($dia < 1 || $dia > 31) {
    $dia = 1;
}

// ajuste para meses invalidos
if ($mes < 1 || $mes > 12) {
    $mes = 1;
}

if ($mes == 2 && $dia >= 28) {
    $dia = 28;

    if (isBissexto($ano)) {
        $dia = 29;
    }
}

if (in_array($mes, $meses30dias) && $dia > 30 ) {
    $dia = 1;
    $mes += 1;
}

// restante da logica aqui

$bissextoStr = "O ano {$ano} NÃO é bissexto.";

if (isBissexto($ano)) {
    $bissextoStr = "O ano {$ano} é bissexto.";
}

// 32/05/1990 => 01/06/1990 (Corrigi para uma data valida).
$dataStr = "{$dia}/{$mes}/{$ano}"; // 01/06/1990

echo "A data informada {$dataStr}. {$bissextoStr}";
// A data informada 01/06/1990. O ano 1990 NÃO é bissexto.
