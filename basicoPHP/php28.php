<?php
// Criando uma matriz 5x5 com números aleatórios
$matriz = [];
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
        $matriz[$i][$j] = rand(0, 100);
    }
}

// Função para encontrar o maior valor na matriz
function maior_valor_matriz($matriz) {
    $maior = $matriz[0][0];
    foreach ($matriz as $linha) {
        foreach ($linha as $valor) {
            if ($valor > $maior) {
                $maior = $valor;
            }
        }
    }
    return $maior;
}

echo "Maior valor da matriz: " . maior_valor_matriz($matriz);
?>
