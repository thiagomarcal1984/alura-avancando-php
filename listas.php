<?php

$idadeList = array(21, 23, 19, 25, 30, 41, 18); // Sintaxe original para array.
// $idadeList = [21, 23, 19, 25, 30, 41, 18]; // Sintaxe introduzida no PHP 5.4.

$umaIdade = $idadeList[4]; // Busca pelo quinto item do array.

// $idadeList[7] = 20; // Acréscimo da idade 20 na posição 8 do array indexado.
$idadeList[count($idadeList)] = 20; // Acréscimo da idade 20 na última posição do array indexado.
// $idadeList[] = 20; // Também acrescenta a idade 20 na última posição do array indexado.

foreach($idadeList as $idade) {
    echo $idade . PHP_EOL;
}
