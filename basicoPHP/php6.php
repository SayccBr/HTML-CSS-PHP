<?php
$a = 10;
$b = 5;

echo "Soma +=: " . ($a += $b) . "<br>";
echo "Subtração -=: " . ($a -= $b) . "<br>";
echo "Multiplicação *=: " . ($a *= $b) . "<br>";
echo "Divisão /=: " . ($a /= $b) . "<br>";

$c = 1;
echo "Pré-incremento: " . (++$c) . "<br>"; // Incrementa antes de exibir
echo "Pós-incremento: " . ($c++) . "<br>"; // Exibe e depois incrementa
echo "Valor final de c: " . $c . "<br>";
?>
