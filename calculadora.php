<?php
//  + - * /
$value = '2';
$value2 = "02";
$operador = '+';
$resultado = 0 ; 
$resultado = $value / $value2 ;
echo $resultado; // 1

// Garbage colector
$resultado; //4456454445 LIXO

$price =  (float) "{$price}"; // "123.45"

// 123 OU 1234 == 123
// 123 OU 1234 == 123
if ($value == $price || $value2 === $price) {
  // café
}
else if  ($value == ($price - 1) || $value2 === ($price - 1)) {
    // compra um suco
} else {
    // compra agua
}

echo date('d/m/Y'); // 11/07/2023 11-07-2023.
echo date('Y-m-d'); // 2023-07-11. 

// usuario
echo date('d/m/Y'); // 11/07/2023 11-07-2023.
echo date('d/m/Y H:i:s'); // 11/07/2023 20:19:50
// BD | DB
echo date('Y-m-d'); // 2023-07-11. 
echo date('Y-m-d H:i:s'); // 2023-07-11 20:19:50. 


// <br> enter
// PHP_EOL "/n/t/r" (End Of Line) enter
echo "aviao /n/t/r";
echo "aviao " . PHP_EOL;


