<?php
// Função para verificar se um valor existe em um array e retornar sua chave
function verifica_valor($array, $valor) {
    $chave = array_search($valor, $array);
    if ($chave !== false) {
        return "Valor encontrado na chave: " . $chave;
    } else {
        return "Valor não encontrado no array.";
    }
}

// Exemplo de uso
$array = [1, 2, 3, 4, 5];
echo verifica_valor($array, 3); // Exemplo com valor presente
echo "<br>";
echo verifica_valor($array, 6); // Exemplo com valor não presente
?>
