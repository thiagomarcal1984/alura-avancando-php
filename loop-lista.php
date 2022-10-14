<?php

// $idadeList = array(23, 19, 25, 30, 41, 18, 21); // Sintaxe original para array.
$idadeList = [23, 19, 25, 30, 41, 18, 21]; // Sintaxe introduzida no PHP 5.4.

// Loop com for clássico.
for ($i=0; $i < count($idadeList); $i++) { 
    echo $idadeList[$i] . PHP_EOL;
}

echo "Número de elementos no array \$idadeList: " . count($idadeList);
