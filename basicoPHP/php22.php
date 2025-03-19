<?php
// a) Função para verificar se uma data é válida
function verifica_data($dia, $mes, $ano) {
    return checkdate($mes, $dia, $ano);
}

// b) Função para retornar data por extenso a partir de um timestamp
function data_extenso_timestamp($timestamp) {
    $meses = [
        1 => 'Janeiro', 2 => 'Fevereiro', 3 => 'Março', 4 => 'Abril', 5 => 'Maio', 6 => 'Junho',
        7 => 'Julho', 8 => 'Agosto', 9 => 'Setembro', 10 => 'Outubro', 11 => 'Novembro', 12 => 'Dezembro'
    ];
    
    $data = getdate($timestamp);
    $dia = $data['mday'];
    $mes = $meses[$data['mon']];
    $ano = $data['year'];
    
    return "$dia de $mes de $ano";
}

// c) Função para retornar data por extenso a partir de dia, mês e ano
function data_extenso($dia, $mes, $ano) {
    if (!verifica_data($dia, $mes, $ano)) {
        return "Data inválida!";
    }
    
    $meses = [
        1 => 'Janeiro', 2 => 'Fevereiro', 3 => 'Março', 4 => 'Abril', 5 => 'Maio', 6 => 'Junho',
        7 => 'Julho', 8 => 'Agosto', 9 => 'Setembro', 10 => 'Outubro', 11 => 'Novembro', 12 => 'Dezembro'
    ];
    
    return "$dia de {$meses[$mes]} de $ano";
}
?>
