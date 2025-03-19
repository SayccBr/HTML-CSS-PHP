<?php
// Criando um array de alunos
$alunos = ['Maria', 'João', 'Carlos', 'José', 'Ana'];

// Alterando os três primeiros nomes
$alunos[0] = 'Lucas';
$alunos[1] = 'Fernanda';
$alunos[2] = 'Pedro';

// Imprimindo o conteúdo do array
foreach ($alunos as $aluno) {
    echo $aluno . "<br>";
}
?>
