<?php
function maiorNumero($num1, $num2) {
    if ($num1 > $num2) {
        return "$num1 é o maior número.\n";
    } else {
        return "$num2 é o maior número.\n";
    }
}

// Exemplo de chamada da função
echo maiorNumero(10, 5);
?>
