<?php
$vetor1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]; // Exemplo de primeiro vetor
$vetor2 = [5, 6, 7, 8, 9, 10, 11, 12, 13, 14]; // Exemplo de segundo vetor

$diferenca = array_diff($vetor1, $vetor2);

foreach ($diferenca as $numero) {
    echo "$numero está no primeiro vetor e NÃO está no segundo vetor.\n";
}
?>
