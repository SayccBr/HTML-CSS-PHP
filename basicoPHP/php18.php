<?php
function verificarParOuImpar($numero) {
    if ($numero % 2 == 0) {
        return "$numero é par.\n";
    } else {
        return "$numero é ímpar.\n";
    }
}

// Exemplo de chamada da função
echo verificarParOuImpar(5);
?>
