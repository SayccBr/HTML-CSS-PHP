<?php
// Criando um array de 100 posições com números aleatórios
$numeros = [];
for ($i = 0; $i < 100; $i++) {
    $numeros[] = rand(0, 1000);
}

// Imprimindo o conteúdo do array
foreach ($numeros as $numero) {
    echo $numero . "<br>";
}
?>
