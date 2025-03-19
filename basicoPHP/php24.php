<?php
// a) Função para transformar todas as vogais da string fornecida por '?'
function oculta_vogais($string) {
    return preg_replace('/[aeiouAEIOU]/', '?', $string);
}

// b) Função para retornar uma string em ordem inversa
function inverte($string) {
    $tamanho = strlen($string);
    $invertida = '';
    for ($i = $tamanho - 1; $i >= 0; $i--) {
        $invertida .= $string[$i];
    }
    return $invertida;
}
?>
