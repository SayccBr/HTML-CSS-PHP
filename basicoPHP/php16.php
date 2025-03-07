<?php
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]; // Exemplo de array com 10 números inteiros

foreach ($numeros as $numero) {
    if ($numero % 2 == 0) {
        echo "$numero é par.\n";
    } else {
        echo "$numero é ímpar.\n";
    }
}
?>
