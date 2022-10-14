<?php

$array = [
    1 => 'a', // Tipo inteiro, que vai ser sobreescrito pelas próximas linhas.
    '1' => 'b', // Tipo string que pode ser convertida para inteiro. 
    1.5 => 'c', // Tipo float, que pode ser convertido para inteiro.
    true => 'd', // Tipo boolean, que pode ser convertido para inteiro.
];

foreach ($array as $item) {
    echo $item . PHP_EOL;
}
